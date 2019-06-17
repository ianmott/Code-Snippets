<?php
function Color_Spiral_RGBa($Count = 1, $A = 1){
	$R = 255;
	$G = 0;
	$B = 0;
	$Steps = 12;
	$Step = 0;
	$Spiral = 0;
	$Colors = [];
	$Seeds = array (255, 128, 0);
	for ($i = 0; $i < $Count; $i++){
		$Step++;
		Switch ($Step % 12){
			case 0:
				$R = $Seeds[0];
				$G = $Seeds[2];
				$B = $Seeds[2];
				break;
			case 1:
				$R = $Seeds[0];
				$G = $Seeds[1];
				$B = $Seeds[2];
				break;
			case 2:
				$R = $Seeds[0];
				$G = $Seeds[0];
				$B = $Seeds[2];
				break;
			case 3:
				$R = $Seeds[1];
				$G = $Seeds[0];
				$B = $Seeds[2];
				break;
			case 4:
				$R = $Seeds[2];
				$G = $Seeds[0];
				$B = $Seeds[2];
				break;
			case 5:
				$R = $Seeds[2];
				$G = $Seeds[0];
				$B = $Seeds[0];
				break;
			case 6:
				$R = $Seeds[2];
				$G = $Seeds[1];
				$B = $Seeds[0];
				break;
			case 7:
				$R = $Seeds[2];
				$G = $Seeds[2];
				$B = $Seeds[0];
				break;
			case 8:
				$R = $Seeds[1];
				$G = $Seeds[2];
				$B = $Seeds[0];
				break;
			case 9:
				$R = $Seeds[0];
				$G = $Seeds[2];
				$B = $Seeds[0];
				break;
			case 10:
				$R = $Seeds[0];
				$G = $Seeds[2];
				$B = $Seeds[1];
				break;
			case 11:
				$R = $Seeds[0];
				$G = $Seeds[1];
				$B = $Seeds[0];
				break;
		}
		$Colors[$i] = "rgba(".$R.", ".$G.", ".$B.", ".$A.")";
		If ($Step == $Steps -1){
			$Spiral++;
			$Seeds[0] -= 25;
			$Seeds[2] += 25;
			$Step = 0;
		}
	}
	return $Colors;
}
?>
