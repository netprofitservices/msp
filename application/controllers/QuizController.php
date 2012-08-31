<?php

class QuizController extends Zend_Controller_Action
{
	protected $model;
	
    public function init() {
		$this->view->metaTitle = "Mainstream Preppers - Thriving in Good Times and Bad";
		$this->view->metaKeywords = "prepper, prepardeness, prepper training, prepper groups, preparedness training, intentional community";
		$this->view->metaDescription = "Mainstream Preppers offers advanced skill building in preparedness, a network for forming preparedness groups, and more.";
		
		$configOptions = new Zend_Config($this->getInvokeArg('bootstrap')->getOptions());
		$this->view->baseUrl = $configOptions->baseUrl;
	}
	
	public function indexAction() {
		$this->view->quizSetup = $this->getModel()->getQuizSetup();
		
		if ($this->getRequest()->isPost()) {
			$result = $this->getModel()->grade($_POST);
			
			$correctCount = $this->getModel()->getCorrectAnswerCount();
			$totalCount = $this->getModel()->getTotalAnswerCount();
			$letterGrade = $this->getModel()->getLetterGrade();
			
			echo "You answered $correctCount out of $totalCount questions correctly. Grade: $letterGrade.";
			
			pr($result);
			prd($_POST);
		}
	}
	
	protected function getModel() {
		if (empty($this->model)) {
			require_once('models/Quiz.php');
			
			$this->model = new Quiz;
		}
		
		return $this->model;
	}
}
