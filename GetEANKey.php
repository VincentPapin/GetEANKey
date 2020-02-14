<?php

echo getEANKey("3037920162003");

function getEANKey($EAN)
{
	$key;
	
	//Contrôle si la clé passée en paramètre n'est pas vide
	if(!empty($EAN))
	{
		//Calcul de la somme, l'indice commence à 0 et non à 1 WinDev
		$somme = $EAN[0]+ $EAN[1]*3+$EAN[2]+$EAN[3]*3+$EAN[4]+$EAN[5]*3+$EAN[6]+$EAN[7]*3+$EAN[8]+$EAN[9]*3+$EAN[10]+$EAN[11]*3;
		
		//division de la somme par 10 et calcul dur reste de la divison
		$resteDivision = fmod($somme, 10);
		
		//Si le reste de la divison est différente de 0 alors 10 - reste de la divison
		if($resteDivision != 0)
		{
			$key = 10-$resteDivision;
		} 
		else // Sinon la clé = 0
		{
			$key = 0;
		}
	}
    return $key;
}