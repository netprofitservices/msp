<?

class Quiz {
	public function getQuizSetup() {
		return $this->quizSetup;
	}
	
	protected $correctAnswers;
	protected $incorrectAnswers;
	protected $quizSetup = array(
		'sections' => array(
			array(
				'title' => 'Water',
				'description' => "If you currently do not have any water storages, please don't complete this quiz until you do. Water is a crucial aspect of preparedness.",
				'questions' => array(
					array(
						'question' => "Do you have 2 sources of drinking water (minimum) plus an emergency storage?",
						'type' => 'bool',
						'answer' => 'yes',
						//'default' => 'yes',
						'key' => 'two_sources_of_water'
					),
					array(
						'question' => "How many gallons of drinking water do you have on hand? How many days is that for your family?",
						'type' => 'inputs',
						'answer' => 5,
						'inputs' => array(
							array(
								'label' => 'G',
								'key' => 'gallons_of_water'
							),
							array(
								'label' => 'Days',
								'key' => 'days_of_water'
							)
						)
					),
					array(
						'question' => "Do you have an emergency plan in place should your stored water run out?	Have you practiced that plan?",
						'type' => 'bool',
						'answer' => 'yes',
						//'default' => 'no',
						'key' => 'water_plan'
					),
					array(
						'question' => "How many gallons do you have for cooking? How many for cleaning and sanitation?",
						'type' => 'inputs',
						'answer' => 5,
						'inputs' => array(
							array(
								'label' => 'G',
								'key' => 'gallons_of_water_cooking'
							),
							array(
								'label' => 'Days',
								'key' => 'days_of_water_cooking'
							)
						)
					)
				)
			),
			
			/**
			 * FOOD
			 */
			array(
				'title' => 'Food',
				'description' => "If you currently do not have any water storages, please don't complete this quiz until you do. Water is a crucial aspect of preparedness.",
				'questions' => array(
					array(
						'question' => "At 2 meals per day, how many days worth of food do you have stored for your family? For pets/livestock?",
						'type' => 'inputs',
						'answer' => 4,
						'inputs' => array(
							array(
								'label' => 'Days',
								'key' => 'days_of_food'
							)
						)
						
					),
					array(
						'question' => "Do you have a stored cache of food outside of your home for emergencies?",
						'type' => 'bool',
						'key' => 'food_outside_home'
					),
					array(
						'question' => "Are you self reliant by growing a percentage of your own food that you can survive on long term and balanced with meat/protein, fruit, and vegetables? Have you practiced that plan?",
						'type' => 'bool',
						'key' => 'food_plan'
					),
					array(
						'question' => "Do you require outside feed, fertilizers, etc to produce this food?",
						'type' => 'bool',
						'key' => 'food_feed'
					),
					array(
						'question' => "Do you have an emergency plan in place should your stored water run out? Have you practiced that plan?",
						'type' => 'bool',
						'key' => 'water_plan'
					),
					array(
						'question' => "Do you know how to prevent micro-organisms from growing in stored water?",
						'type' => 'bool',
						'key' => 'water_organisms'
					)
				)
			),
			
			/**
			 * SHELTER
			 */
			array(
				'title' => 'Shelter',
				'description' => "Job loss and short term power outages are probably the most realistic reasons you'd want food storage on hand. But other situations could erupt such as a broken food distribution network, a serious drought, a virus outbreak, riot, or any other situation where you'd want to shelter in place.",
				'questions' => array(
					array(
						'question' => "Do you pay rent or have a mortgage? ",
						'type' => 'bool',
						'key' => 'rent_or_mortgage'
					),
					array(
						'question' => "How long can you stay in your shelter if your income stops tomorrow?",
						'type' => 'inputs',
						'inputs' => array(
							array(
								'label' => 'Months',
								'key' => 'months_of_shelter_no_income'
							)
						)
					),
					array(
						'question' => "Do you have a backup power system in place in case of an extended power outage?",
						'type' => 'bool',
						'key' => 'backup_power'
					),
					array(
						'question' => "Have you practiced cooking/sanitation/heating your home without utility water or power?",
						'type' => 'bool',
						'key' => 'power_practice'
					),
					array(
						'question' => "Is your home/retreat/shelter defensible should you become a target? Resistant to vehicles, bullets, fire?",
						'type' => 'bool',
						'key' => 'shelter_defensible'
					),
					array(
						'question' => "Are others in your immediate vicinity as prepared as you? Do you have a plan if they’re not?",
						'type' => 'bool',
						'key' => 'neighbors_plan'
					),
					array(
						'question' => "In a crisis situation, do you know how to protect your home while managing food production, sanitation, etc?",
						'type' => 'bool',
						'key' => 'protect_home'
					),
					array(
						'question' => "Do you consider electricity a necessity?",
						'type' => 'bool',
						'key' => 'electricity_necessity'
					),
					array(
						'question' => "<span style='padding-left: 10px'> </span>If yes, do you have a PACE Plan for electricity?",
						'type' => 'bool',
						'key' => 'pace_plan'
					),
					array(
						'question' => "Do you have the emergency items suggested by the red cross and ready.gov?",
						'type' => 'bool',
						'key' => 'emergency_items'
					),
					array(
						'question' => "Do you have a bug out bag (portable 72 hour kit) in case you need to leave your home quickly?",
						'type' => 'bool',
						'key' => 'bugout_bag'
					)
				)
			),
						
			/**
			 * SECURITY
			 */
			array(
				'title' => 'Security',
				'description' => "Security is more than guns and a bunker. It's physical fitness, self defense skills, and ongoing training to maintain your skills.",
				'questions' => array(
					array(
						'question' => "Ask yourself: Could you or members of your family be viewed as an easy target? examples: overweight, glasses, weak appearance or confidence lacking posture",
						'type' => 'bool',
						'key' => 'easy_target'
					),
					array(
						'question' => "Could you defend yourself from multiple attackers? Are you ready right now? If needed, could you outrun them?",
						'type' => 'bool',
						'key' => 'defend_yourself',
					),
					array(
						'question' => "Do you have a home defense plan? Have you had it reviewed by an expert?",
						'type' => 'bool',
						'key' => 'home_defense_plan'
					),
					array(
						'question' => "Have you taken defensive knife, defensive shotgun and defensive handgun courses?",
						'type' => 'bool',
						'key' => 'defensive_classes'
					),
					array(
						'question' => "Do you practice your firearm and other defense skills regularly?",
						'type' => 'bool',
						'key' => 'firearm_practice'
					)
				)
			),
						
			/**
			 * SURVIVAL / MEDICAL / SANITATION
			 */
			array(
				'title' => 'Survival / Medical / Sanitation',
				'description' => "",
				'questions' => array(
					array(
						'question' => "Do you have first aid / first responder training?",
						'type' => 'bool',
						'key' => 'first_aid_training'
					),
					array(
						'question' => "Do you carry the medical kits to provide first aid? In your home? In your car? On hikes?",
						'type' => 'bool',
						'key' => 'carry_medical_kit'
					),
					array(
						'question' => "Do you have preps for basic sanitation should water treatment plants fail or sewers back up?",
						'type' => 'bool',
						'key' => 'sanitation_preps'
					),
					array(
						'question' => "Scenario: You are involved in a multi car accident in the middle of winter. Your family is freezing cold and wet while others are seriously injured.",
						'type' => 'heading'
					),
					array(
						'question' => "

						Can you treat injured victims? Do you know how/when to safely move them?",
						'type' => 'bool',
						'key' => 'treat_injured'
					),
					array(
						'question' => "Can you create a simple shelter for victims? Are you carrying the gear with you?",
						'type' => 'bool',
						'key' => 'create_shelter'
					),
					array(
						'question' => "How many ways can you make fire? Do you carry the needed tools in your vehicle?",
						'type' => 'bool',
						'key' => 'make_fire'
					),
					array(
						'question' => "Can you help those at risk of hypothermia?",
						'type' => 'bool',
						'key' => 'hypothermia'
					),
					array(
						'question' => "Do you know how to signal for help?",
						'type' => 'bool',
						'key' => 'signal_for_help'
					),
					array(
						'question' => "Can your spouse attend to your injuries?",
						'type' => 'bool',
						'key' => 'spouse_injuries'
					),
					array(
						'question' => "Do you carry along drinking water? Emergency food?",
						'type' => 'bool',
						'key' => 'carry_water_food'
					),
					array(
						'question' => "Can you get home with what you have on you?",
						'type' => 'bool',
						'key' => 'can_get_home'
					),
					array(
						'question' => "Are you wearing the right clothes/shoes for the journey?",
						'type' => 'bool',
						'key' => 'wearing_right_shoes'
					),
					array(
						'question' => "Do you have flashlights for night travel?",
						'type' => 'bool',
						'key' => 'flashlights'
					),
					array(
						'question' => "Is your family dressed for the journey too?",
						'type' => 'bool',
						'key' => 'family_dressed'
					)
				)
			),
						
			/**
			 * LIFESTYLE
			 */
			array(
				'title' => 'Lifestyle',
				'description' => "",
				'questions' => array(
					array(
						'question' => "How many times have you been to the range this month?",
						'type' => 'inputs',
						'inputs' => array(
							array(
								'label' => 'Times',
								'key' => 'range_sessions_last_month'
							)
						)
					),
					array(
						'question' => "When is the last time you did a 3 day bug out drill?",
						'type' => 'inputs',
						'inputs' => array(
							array(
								'label' => 'Months',
								'key' => 'since_last_3_day_drill'
							)
						)
					),
					array(
						'question' => "What sort of fitness regimen do you follow?",
						'type' => 'bool',
						'key' => 'fitness_regimen'
					),
					array(
						'question' => "Do you carry a get home bag in your vehicle? ",
						'type' => 'bool',
						'key' => 'get_home_bag'
					),
					array(
						'question' => "Have you taken a self defense shotgun class? ",
						'type' => 'bool',
						'key' => 'shotgun_class'
					),
					array(
						'question' => "Have you ever practiced a grid down situation? Ever rehearsed bugging out?",
						'type' => 'bool',
						'key' => 'grid_down_practice'
					)

				)
			),			
						
			/**
			 * BUG OUT LOCATION
			 */
			array(
				'title' => 'Bug Out Location',
				'description' => "",
				'questions' => array(
					array(
						'question' => "Scenario: If trucks stop operating or the power grid stops working, shelves will be empty and the city has 3-7 days of water max. Then everyone will leave the city to survive. Eventually, someone hungry, thirsty, or angry will come across your property.<br /><br />

						You probably already realize it’s impossible to grow & prepare food, maintain personal hygiene, perform daily chores, and get nightly rest while maintaining 24x7 perimeter security. Even 3 or 4 people cannot this job 24x7.",
						'type' => 'heading'
					),
					array(
						'question' => "Did you have a 3 day bug out drill recently within 3 months?",
						'type' => 'bool',
						'key' => '3_day_drill_recently'
					),
					array(
						'question' => "What sort of fitness regimen do you follow?",
						'type' => 'bool',
						'key' => 'fitness_regimen'
					),
					array(
						'question' => "Do you carry a get home bag in your vehicle? ",
						'type' => 'bool',
						'key' => 'get_home_bag'
					),
					array(
						'question' => "Have you taken a self defense shotgun class? ",
						'type' => 'bool',
						'key' => 'shotgun_class'
					),
					array(
						'question' => "Have you ever practiced a grid down situation? Ever rehearsed bugging out?",
						'type' => 'bool',
						'key' => 'grid_down_practice'
					)

				)
			)			
		)
	);
	
	
	public function grade($post) {
		$quiz = $this->getQuizsetup();
		$this->correctAnswers = 0;
		$this->incorrectAnswers = 0;
		
		foreach ($quiz['sections'] as $sectionNumber => $section) {
			foreach ($section['questions'] as $questionNumber => $question) {
				// Check booleans
				if ($question['type'] == 'bool') {
					$userAnswer = (!empty($_POST[$question['key']])) ? 'yes' : 'no';
					
					// Default to a correct answer of Yes
					$correctAnswer = (isset($question['answer'])) ? $question['answer'] : 'yes';
					
					$answerResult = ($userAnswer == $correctAnswer);
					
				}
				
				// Count correct and incorrect answers up
				if ($answerResult) {
					$this->correctAnswers++;
				} else {
					$this->incorrectAnswers++;
				}
				
				// Put the result in the quiz array
				$quiz['sections'][$sectionNumber]['questions'][$questionNumber]['result'] = $answerResult;
			}
		}
		
		return $quiz;
	}
	
	public function getTotalAnswerCount() {
		return $this->correctAnswers + $this->incorrectAnswers;
	}
		
	public function getCorrectAnswerCount() {
		return $this->correctAnswers;
	}
	
	public function getPercentGrade() {
		return $this->getCorrectAnswerCount() / $this->getTotalAnswerCount() * 100;
	}
	
	public function getLetterGrade() {
		$percent = $this->getPercentGrade();
		
		if ($percent > 90) {
			$grade = 'A';
		} elseif ($percent > 80) {
			$grade = 'B';
		} elseif ($percent > 70) {
			$grade = 'C';
		} elseif ($percent > 60) {
			$grade = 'D';
		} else {
			$grade = 'F';
		}
		
		return $grade;
	}
	
	
}