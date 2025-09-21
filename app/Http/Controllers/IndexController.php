<?php

namespace App\Http\Controllers;

use League\Csv\Reader;

class IndexController extends Controller
{
    protected string $votes = 'votos.csv';
    protected string $states = 'estados.csv';
    protected string $parties = 'partidos.csv';

    public function index()
    {
        $votes = $this->votes();
        $parties = $this->parties();
        $states = $this->states();
        $regions = $this->regions();
        $positions = $this->positions();
        $filesData = $this->data();
        return view('welcome', compact('votes', 'parties', 'states', 'regions', 'positions', 'filesData'));
    }

    public function data()
    {
        $votesF = public_path($this->votes);
        $statesF = public_path($this->states);
        $partiesF = public_path($this->parties);

        if (!file_exists($votesF) || !file_exists($statesF) || !file_exists($partiesF)) {
            return response()->json(['error' => 'Arquivos não encontrados'], 404);
        }

        $votesData = $this->readCsvToArray($votesF);    // array de votos
        $statesData = $this->readCsvToArray($statesF);  // array de estados
        $partiesData = $this->readCsvToArray($partiesF);

        return [
            'votes' => $votesData,
            'states' => $statesData,
            'parties' => $partiesData,
        ];
    }

    public function positions()
    {
        $votesF = public_path($this->votes);
        $partiesF = public_path($this->parties);

        if (!file_exists($votesF) || !file_exists($partiesF)) {
            return response()->json(['error' => 'Arquivos não encontrados'], 404);
        }
        $parties = $this->parties();

        $csv = Reader::createFromPath($partiesF, 'r');
        $csv->setHeaderOffset(0);
        $records = $csv->getRecords();

        $statesRegions = [];

        foreach ($records as $record) {
            foreach ($parties['data'] as $state => $votes){
                if($state == $record["Sigla"]){
                    foreach ($votes as $key => $vote) {
                        $statesRegions[$record["Espectro Político"]][$key] = 0;
                    }
                }
            }
        }

        foreach ($records as $record) {
            foreach ($parties['data'] as $state => $votes){
                if($state == $record["Sigla"]){
                    foreach ($votes as $key => $vote) {
                        $statesRegions[$record["Espectro Político"]][$key] += $vote;
                    }
                }
            }
        }

        return [
            'labels' => $parties['labels'],
            'data' => $statesRegions,
        ];
    }

    public function regions()
    {
        $votesF = public_path($this->votes);
        $statesF = public_path($this->states);

        if (!file_exists($votesF) || !file_exists($statesF)) {
            return response()->json(['error' => 'Arquivos não encontrados'], 404);
        }
        $states = $this->states();

        $csv = Reader::createFromPath($statesF, 'r');
        $csv->setHeaderOffset(0);
        $records = $csv->getRecords();

        $statesRegions = [];

        foreach ($records as $record) {
            foreach ($states['data'] as $state => $votes){
                $dd[] = $state . ' - ' . $record["Sigla"];
                if($state == $record["Sigla"]){
                    foreach ($votes as $key => $vote) {
                        $statesRegions[$record["Região"]][$key] = 0;
                    }
                }
            }
        }

        foreach ($records as $record) {
            foreach ($states['data'] as $state => $votes){
                $dd[] = $state . ' - ' . $record["Sigla"];
                if($state == $record["Sigla"]){
                    foreach ($votes as $key => $vote) {
                        $statesRegions[$record["Região"]][$key] += $vote;
                    }
                }
            }
        }

        return [
            'labels' => $states['labels'],
            'data' => $statesRegions,
        ];
    }

    public function states()
    {
        $votes = public_path($this->votes);

        if (!file_exists($votes)) {
            return response()->json(['error' => 'Arquivo não encontrado'], 404);
        }

        $csv = Reader::createFromPath($votes, 'r');
        $csv->setHeaderOffset(0);

        $records = $csv->getRecords();
        $states = [];
        $voteLabels = [];

        foreach ($records as $record) {
            $state = trim($record['Estado'] ?? '');
            $vote = trim($record['Voto'] ?? '');

            if ($state === '' || $vote === '') continue;

            // coleta todos os tipos de voto únicos
            if (!in_array($vote, $voteLabels)) $voteLabels[] = $vote;

            if (!isset($states[$state])) {
                $states[$state] = array_fill_keys($voteLabels, 0);
            }

            // garante que todos os estados existentes tenham todas as labels
            foreach ($states as $s => &$votes) {
                foreach ($voteLabels as $label) {
                    if (!isset($votes[$label])) $votes[$label] = 0;
                }
            }
            unset($votes);

            $states[$state][$vote] = ($states[$state][$vote] ?? 0) + 1;
        }

        ksort($states);
        sort($voteLabels);

        return [
            'labels' => $voteLabels,
            'data' => $states,
        ];
    }

    public function parties()
    {
        $votes = public_path($this->votes);

        if (!file_exists($votes)) {
            return response()->json(['error' => 'Arquivo não encontrado'], 404);
        }

        $csv = Reader::createFromPath($votes, 'r');
        $csv->setHeaderOffset(0); // primeira linha como header

        $records = $csv->getRecords();
        $votesByParty = [];
        $voteLabels = []; // para guardar os valores únicos da coluna Voto

        foreach ($records as $record) {
            $party = trim($record['Partido'] ?? '');
            $vote = trim($record['Voto'] ?? '');

            if ($party === '' || $vote === '') {
                continue;
            }

            // Adiciona o voto à lista de labels, se ainda não existir
            if (!in_array($vote, $voteLabels)) {
                $voteLabels[] = $vote;
            }

            if (!isset($votesByParty[$party])) {
                // inicializa todos os votos existentes até agora com 0
                $votesByParty[$party] = array_fill_keys($voteLabels, 0);
            }

            // garante que novas labels sejam adicionadas a todos os partidos existentes
            foreach ($votesByParty as $p => &$votes) {
                foreach ($voteLabels as $label) {
                    if (!isset($votes[$label])) {
                        $votes[$label] = 0;
                    }
                }
            }
            unset($votes);

            $votesByParty[$party][$vote] = ($votesByParty[$party][$vote] ?? 0) + 1;
        }

        ksort($votesByParty);
        sort($voteLabels); // opcional: ordena labels

        return [
            'labels' => $voteLabels,
            'data' => $votesByParty,
        ];
    }

    public function votes()
    {
        $votes = public_path($this->votes);

        if (! file_exists($votes)) {
            return response()->json(['error' => 'Arquivo não encontrado'], 404);
        }

        $csv = Reader::createFromPath($votes, 'r');
        $csv->setHeaderOffset(0);

        $records = $csv->getRecords();
        $counts = [];

        foreach ($records as $record) {
            $tipo = trim($record['Voto'] ?? '');
            if ($tipo === '') continue;
            $counts[$tipo] = ($counts[$tipo] ?? 0) + 1;
        }

        arsort($counts); // opcional: ordena do maior para menor

        return $counts;
    }

    public function readCsvToArray(string $filePath): array
    {
        if (!file_exists($filePath)) {
            return []; // retorna array vazio se o arquivo não existir
        }

        $csv = Reader::createFromPath($filePath, 'r');
        $csv->setHeaderOffset(0); // primeira linha como header
        $records = $csv->getRecords(); // iterável de arrays associativos

        $data = [];
        foreach ($records as $record) {
            $data[] = $record; // adiciona cada linha como array associativo
        }

        return $data;
    }
}
