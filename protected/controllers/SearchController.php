<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SearchController extends Controller{
    
    public function actionIndex()
	{
		$model=new SearchForm;

		
		// display the login form
		$this->render('index',array('model'=>$model));
	}
}