<?php
	Class Riot {

		public function __construct($username, $region) {
			$this->region = $region;
			$this->getPlayerByName($username);
		}

		public function stats() {
			$this->request('api/lol/'.strtolower($this->region).'/v1.3/stats/by-summoner/'.$this->user['id'].'/summary');
			return $this->doRequest();
		}

		private function getPlayerByName($nickname) {
			$this->request('api/lol/'.strtolower($this->region).'/v1.4/summoner/by-name/'.$nickname);
			$response = $this->doRequest();
			if ($response) { $this->user = current($response); }
			else { $this->user = false; }
		}

		private function request($request) { 
			if ((!isset($this->request)) || ($this->request == '')) { $this->request = 'https://'.$this->region.'.api.pvp.net/'; }
			$this->request .= $request;
		}

		private function doRequest() {
			$this->request('?api_key='.Config::get('app.riot_api_key'));
			try { $data = file_get_contents($this->request); }
			catch(Exception $e) { $data = false; }
			if (!$data) { return false; }
			$this->request = '';
			return json_decode($data, true);
		}
	}