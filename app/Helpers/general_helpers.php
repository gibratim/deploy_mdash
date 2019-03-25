<?php

use App\Enums\MalariaResult;
use App\Enums\ParasitaemiaLevel;
use App\Enums\TestType;
use App\Enums\Gender;
use BenSampo\Enum\Enum;

if (! function_exists('generate_malaria_result')) {
    function generate_malaria_result($result_string) {

        // strip out all whitespace
		$result_string = preg_replace('/\s*/', '', $result_string);
		// convert the string to all lowercase
		$result_string = strtolower($result_string);

        // compares txt to find positive or negative then assigns to enumerator
		$malariaresult = MalariaResult::getValue('Unknown');

        if(str_contains($result_string, 'positive')){
        	$malariaresult = MalariaResult::getValue('Postive');
        }

        if (str_contains($result_string, 'negative')) {
			$malariaresult = MalariaResult::getValue('Negative');
        }
        
        return $malariaresult;
    }
}

if (! function_exists('generate_parasitaemia_level')) {
    function generate_parasitaemia_level($parasitaemia_level) {


        // strip out all whitespace
		$parasitaemia_level = preg_replace('/\s*/', '', $parasitaemia_level);
		// convert the string to all lowercase
		$parasitaemia_level = strtolower($parasitaemia_level);

        // compares txt to find positive or negative then assigns to enumerator
		$test_parasitaemia_level = ParasitaemiaLevel::getValue('Unknown');

		
        if(str_contains($parasitaemia_level, '+')){
        	$test_parasitaemia_level = ParasitaemiaLevel::getValue('Plus');
        }

        if (str_contains($parasitaemia_level, '++')) {
			$test_parasitaemia_level = ParasitaemiaLevel::getValue('Plusplus');
        }

        if (str_contains($parasitaemia_level, '+++')) {
			$test_parasitaemia_level = ParasitaemiaLevel::getValue('Plusplusplus');
        }

        if (str_contains($parasitaemia_level, '++++')) {
			$test_parasitaemia_level = ParasitaemiaLevel::getValue('Plusplusplusplus');
        }
        
        return $test_parasitaemia_level;
    }
}

if (! function_exists('generate_test_type')) {
    function generate_test_type($test_type) {
        $test_type = (string) $test_type;
        // strip out all whitespace
		$test_type = preg_replace('/\s*/', '', $test_type);
		// convert the string to all lowercase
		$test_type = strtolower($test_type);

        // compares txt to find positive or negative then assigns to enumerator
		$test_type_result = TestType::getValue('Unknown');

		
        if(starts_with($test_type, '90') && !str_contains($test_type, 'no')){
        	$test_type_result = TestType::getValue('LockIn90');
        }

        if (starts_with($test_type, '90') && str_contains($test_type, 'no')) {
			$test_type_result = TestType::getValue('NoLockIn90');
        }

        if (starts_with($test_type, '360') && !str_contains($test_type, 'no')) {
			$test_type_result = TestType::getValue('LockIn360');
        }

        if (starts_with($test_type, '360') && str_contains($test_type, 'no')) {
			$test_type_result = TestType::getValue('NoLockIn360');
        }
        
        return $test_type_result;
    }
}

if (! function_exists('generate_gender')) {
    function generate_gender($gender) {
        $gender = (string) $gender;
        // strip out all whitespace
        $gender = preg_replace('/\s*/', '', $gender);
        // convert the string to all lowercase
        $gender = strtolower($gender);

        // compares txt to find positive or negative then assigns to enumerator
        $gender_result = Gender::getValue('Unknown');

        
        if(starts_with($gender, 'm') || str_contains($gender, 'male')){
            $gender_result = Gender::getValue('Male');
        }

        if(starts_with($gender, 'f') || str_contains($gender, 'female')){
            $gender_result = Gender::getValue('Female');
        }
        
        return $gender_result;
    }
}

if (! function_exists('push')) {
    function push($key, $value) {
        $values = Session::get($key, []);
        $values[] = $value;
        Session::flash($key, $values);
    }
}