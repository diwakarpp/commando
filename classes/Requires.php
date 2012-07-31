<?php
	/*
	# Copyright 2012 NodeSocket LLC
	#
	# Licensed under the Apache License, Version 2.0 (the "License");
	# you may not use this file except in compliance with the License.
	# You may obtain a copy of the License at
	#
	# http://www.apache.org/licenses/LICENSE-2.0
	#
	# Unless required by applicable law or agreed to in writing, software
	# distributed under the License is distributed on an "AS IS" BASIS,
	# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	# See the License for the specific language governing permissions and
	# limitations under the License.
	*/
	
 	class Requires {
 		static function auto_load() {
 			require_once(dirname(__DIR__) . "/app.config.php");
 			
 			spl_autoload_register(function($class_name) {
 				require(dirname(__DIR__) . "/classes/" . $class_name . ".php");
			});
 		}
 	}
	
	Requires::auto_load();
?>