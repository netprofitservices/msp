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
	}
	
	public function resultsAction() {
		if ($this->getRequest()->isPost()) {
			$this->view->quiz = $this->getModel()->grade($_POST);
			
			// Send the quiz results to MSP
			$this->getModel()->emailResults();
			
			$this->view->correctCount = $this->getModel()->getCorrectAnswerCount();
			$this->view->totalCount = $this->getModel()->getTotalAnswerCount();
			$this->view->letterGrade = $this->getModel()->getLetterGrade();
		} else {
			$this->_redirect('quiz/index');
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
