<?php
// 
// This file is part of Nude.
// 
// Nude is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
// 
// Nude is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
// 
// You should have received a copy of the GNU General Public License
// along with Nude.  If not, see <http://www.gnu.org/licenses/>.
// 
// Copyright 2009, Crispin Porter + Bogusky

require_once('controllers/datasource_crawler.php');

class Youtube extends DatasourceCrawler
{
	function __construct() {
	}
	
	function crawlFeed($updatedSince = '', $tag = '', $datafeedId = 0) {
		$this->Youtube =& ConnectionManager::getDataSource("youtube");
		$results = $this->Youtube->search($tag);
		return $this->insertDatarows($updatedSince, $tag, "youtube", $datafeedId, $results);
	}
}

$crawler = new Youtube();

?>