<?php
	class EMCTools_Route {
		
		function createArray() {
			
		}
		
		function getRoute() {
			foreach ($routes as $route) {
				if(isset($_GET[$route])) {
					return $route;
				} else {
					//Do nothing
				}
			}
		}
	}
?>