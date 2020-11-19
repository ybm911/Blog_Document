<?php
/**
* PHP文件删除
*/
if($argc > 1){
	for($i=1; $i < $argc; $i++)
		@unlink($argv[$i]);
}
