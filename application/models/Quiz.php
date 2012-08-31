<?

class Quiz {
	public function getQuizSetup() {
		return $this->quizSetup;
	}
	
	public function setQuizSetup($quiz) {
		$this->quizSetup = $quiz;
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
						'key' => 'two_sources_of_water',
						'explanation' => "Experts suggest 14 days worth of drinking water minimum, which is 3 gallons per day per person.<br />
						Example: a family of 5 needs 210 gallons."
					),
					array(
						'question' => "How many gallons of drinking water do you have on hand? How many days is that for your family?",
						'type' => 'inputs',
						'inputs' => array(
							array(
								'label' => 'G',
								'key' => 'gallons_of_water',
								'answer' => 5
							),
							array(
								'label' => 'Days',
								'key' => 'days_of_water',
								'answer' => 4
							)
						),
						'explanation' => "Experts suggest 14 days worth of drinking water minimum, which is 3 gallons per day per person.<br />
						Example: a family of 5 needs 210 gallons."
					),
					array(
						'question' => "Do you have an emergency plan in place should your stored water run out?	Have you practiced that plan?",
						'type' => 'bool',
						'answer' => 'yes',
						//'default' => 'no',
						'key' => 'water_plan',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "How many gallons do you have for cooking? How many for cleaning and sanitation?",
						'type' => 'inputs',
						'inputs' => array(
							array(
								'label' => 'G',
								'key' => 'gallons_of_water_cooking',
								'answer' => 3
							),
							array(
								'label' => 'Days',
								'key' => 'days_of_water_cooking',
								'answer' => 2
							)
						),
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					)
				),
				'realityCheck' => array(
					'heading' => "You'll only survive 3 days without drinkable water!<br />	You'll also need water for cooking and sanitation.",
					'body' => "<strong>Experts recommend you store <span>3 gallons per day *per person*</span> of clean drinkable water.</strong><br>This is 1 gallon for drinking, 
					1 gallon for food preparation, and 1 gallon for sanitation.  What happens when your storage runs out?  
					It&rsquo;s important to have a <a class='fancybox' href='retreatpace'>PACE Plan</a> for clean drinkable water."
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
						'inputs' => array(
							array(
								'label' => 'Days',
								'key' => 'days_of_food',
								'answer' => 3
							)
						),
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
						
					),
					array(
						'question' => "Do you have a stored cache of food outside of your home for emergencies?",
						'type' => 'bool',
						'answer' => 'yes',
						'key' => 'food_outside_home',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Are you self reliant by growing a percentage of your own food that you can survive on long term and balanced with meat/protein, fruit, and vegetables? Have you practiced that plan?",
						'type' => 'bool',
						'key' => 'food_plan',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Do you require outside feed, fertilizers, etc to produce this food?",
						'type' => 'bool',
						'key' => 'food_feed',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Do you have an emergency plan in place should your stored water run out? Have you practiced that plan?",
						'type' => 'bool',
						'key' => 'water_plan',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Do you know how to prevent micro-organisms from growing in stored water?",
						'type' => 'bool',
						'key' => 'water_organisms',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					)
				),
				'realityCheck' => array(
					'heading' => "Food tastes good",
					'body' => "<strong>Experts agree that food is delicious</strong><br />
					So you should prepare some non-perishable food supplies. This section can include HTML."
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
						'key' => 'rent_or_mortgage',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "How long can you stay in your shelter if your income stops tomorrow?",
						'type' => 'inputs',
						'inputs' => array(
							array(
								'label' => 'Months',
								'key' => 'months_of_shelter_no_income',
								'answer' => 6
							)
						),
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Do you have a backup power system in place in case of an extended power outage?",
						'type' => 'bool',
						'key' => 'backup_power',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Have you practiced cooking/sanitation/heating your home without utility water or power?",
						'type' => 'bool',
						'key' => 'power_practice',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Is your home/retreat/shelter defensible should you become a target? Resistant to vehicles, bullets, fire?",
						'type' => 'bool',
						'key' => 'shelter_defensible',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Are others in your immediate vicinity as prepared as you? Do you have a plan if they’re not?",
						'type' => 'bool',
						'key' => 'neighbors_plan',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "In a crisis situation, do you know how to protect your home while managing food production, sanitation, etc?",
						'type' => 'bool',
						'key' => 'protect_home',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Do you consider electricity a necessity?",
						'type' => 'bool',
						'key' => 'electricity_necessity',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "<span style='padding-left: 10px'> </span>If yes, do you have a PACE Plan for electricity?",
						'type' => 'bool',
						'key' => 'pace_plan',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Do you have the emergency items suggested by the red cross and ready.gov?",
						'type' => 'bool',
						'key' => 'emergency_items',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Do you have a bug out bag (portable 72 hour kit) in case you need to leave your home quickly?",
						'type' => 'bool',
						'key' => 'bugout_bag',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					)
				),
				'realityCheck' => array(
					'heading' => "Shelter reality check",
					'body' => "<strong>Shelter, etc.</strong><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
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
						'key' => 'easy_target',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Could you defend yourself from multiple attackers? Are you ready right now? If needed, could you outrun them?",
						'type' => 'bool',
						'key' => 'defend_yourself',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Do you have a home defense plan? Have you had it reviewed by an expert?",
						'type' => 'bool',
						'key' => 'home_defense_plan',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Have you taken defensive knife, defensive shotgun and defensive handgun courses?",
						'type' => 'bool',
						'key' => 'defensive_classes',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Do you practice your firearm and other defense skills regularly?",
						'type' => 'bool',
						'key' => 'firearm_practice',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					)
				),
				'realityCheck' => array(
					'heading' => "Security reality check.<br />This looks better with 2 lines.",
					'body' => "<strong>Example heading</strong><br />
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
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
						'key' => 'first_aid_training',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Do you carry the medical kits to provide first aid? In your home? In your car? On hikes?",
						'type' => 'bool',
						'key' => 'carry_medical_kit',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Do you have preps for basic sanitation should water treatment plants fail or sewers back up?",
						'type' => 'bool',
						'key' => 'sanitation_preps',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Scenario: You are involved in a multi car accident in the middle of winter. Your family is freezing cold and wet while others are seriously injured.",
						'type' => 'heading'
					),
					array(
						'question' => "Can you treat injured victims? Do you know how/when to safely move them?",
						'type' => 'bool',
						'key' => 'treat_injured',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Can you create a simple shelter for victims? Are you carrying the gear with you?",
						'type' => 'bool',
						'key' => 'create_shelter',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "How many ways can you make fire? Do you carry the needed tools in your vehicle?",
						'type' => 'bool',
						'key' => 'make_fire',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Can you help those at risk of hypothermia?",
						'type' => 'bool',
						'key' => 'hypothermia',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Do you know how to signal for help?",
						'type' => 'bool',
						'key' => 'signal_for_help',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Can your spouse attend to your injuries?",
						'type' => 'bool',
						'key' => 'spouse_injuries',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Do you carry along drinking water? Emergency food?",
						'type' => 'bool',
						'key' => 'carry_water_food',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Can you get home with what you have on you?",
						'type' => 'bool',
						'key' => 'can_get_home',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Are you wearing the right clothes/shoes for the journey?",
						'type' => 'bool',
						'key' => 'wearing_right_shoes',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Do you have flashlights for night travel?",
						'type' => 'bool',
						'key' => 'flashlights',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Is your family dressed for the journey too?",
						'type' => 'bool',
						'key' => 'family_dressed',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					)
				),
				'realityCheck' => array(
					'heading' => "Survival reality check",
					'body' => "<strong>heading goes here</strong><br />
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
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
								'key' => 'range_sessions_last_month',
								'answer' => 1
							)
						),
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "When is the last time you did a 3 day bug out drill?",
						'type' => 'inputs',
						'inputs' => array(
							array(
								'label' => 'Months',
								'key' => 'since_last_3_day_drill',
								'answer' => 2
							)
						),
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "What sort of fitness regimen do you follow?",
						'type' => 'bool',
						'key' => 'fitness_regimen',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Do you carry a get home bag in your vehicle? ",
						'type' => 'bool',
						'key' => 'get_home_bag',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Have you taken a self defense shotgun class? ",
						'type' => 'bool',
						'key' => 'shotgun_class',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Have you ever practiced a grid down situation? Ever rehearsed bugging out?",
						'type' => 'bool',
						'key' => 'grid_down_practice',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					)

				),
				'realityCheck' => array(
					'heading' => "Lifestyle reality check",
					'body' => "<strong>heading goes here</strong><br />
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
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
						'key' => '3_day_drill_recently',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "What sort of fitness regimen do you follow?",
						'type' => 'bool',
						'key' => 'fitness_regimen',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Do you carry a get home bag in your vehicle? ",
						'type' => 'bool',
						'key' => 'get_home_bag',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Have you taken a self defense shotgun class? ",
						'type' => 'bool',
						'key' => 'shotgun_class',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					),
					array(
						'question' => "Have you ever practiced a grid down situation? Ever rehearsed bugging out?",
						'type' => 'bool',
						'key' => 'grid_down_practice',
						'explanation' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
					)

				),
				'realityCheck' => array(
					'heading' => "Bug out location reality check",
					'body' => "<strong>heading goes here</strong><br />
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				)
				
			)
						
		)
	);
	
	
	public function grade($post) {
		$quiz = $this->getQuizsetup();
		$this->correctAnswers = 0;
		$this->incorrectAnswers = 0;
		
		foreach ($quiz['sections'] as $sectionNumber => $section) {
			
			$quiz['sections'][$sectionNumber]['allCorrect'] = true;
			
			if (empty($section['questions'])) pr($section);
			
			foreach ($section['questions'] as $questionNumber => $question) {
				// Check booleans
				if ($question['type'] == 'bool') {
					$userAnswer = (!empty($_POST[$question['key']])) ? 'yes' : 'no';
					$quiz['sections'][$sectionNumber]['questions'][$questionNumber]['userAnswer'] = $userAnswer;
					
					// Default to a correct answer of Yes
					$correctAnswer = (isset($question['answer'])) ? $question['answer'] : 'yes';
					
					// Save the correct answer in case we just fell back to the default
					$quiz['sections'][$sectionNumber]['questions'][$questionNumber]['answer'] = $correctAnswer;

					// Compare the user answer to the correct answer
					$answerResult = ($userAnswer == $correctAnswer);
					
				} elseif ($question['type'] == 'inputs') {
					
					$userAnswers = array();
					$correctAnswers = array();
					$answerResult = true;
					foreach ($question['inputs'] as $inputNumber => $input) {
						$userAnswer = $_POST[$input['key']];
						$correctAnswer = $input['answer'];
						$userAnswers[] = "$userAnswer ($input[label])";
						$correctAnswers[] = "$correctAnswer ($input[label])";
						

						
						// User answser is wrong if it's less than the correct answer
						if ($answerResult && $userAnswer < $correctAnswer) {
							$answerResult = false;
						}
					}
					
					// Save a string version of the multiple answers
					$quiz['sections'][$sectionNumber]['questions'][$questionNumber]['userAnswer'] = implode(', ', $userAnswers);
					$quiz['sections'][$sectionNumber]['questions'][$questionNumber]['answer'] = implode(', ', $correctAnswers);
					
					
				}
				
				// Count correct and incorrect answers up
				if ($answerResult) {
					$this->correctAnswers++;
				} else {
					$this->incorrectAnswers++;
					$quiz['sections'][$sectionNumber]['allCorrect'] = false;
				}
				
				// Put the result in the quiz array
				$quiz['sections'][$sectionNumber]['questions'][$questionNumber]['result'] = $answerResult;
			}
		}
		
		$this->setQuizSetup($quiz);
		
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
	
	public function emailResults() {
		
		require_once('models/Mail.php');
		$Mail = new Mail;
		$to = 'personman2@gmail.com';
		$subject = "MSP quiz results";
		$body = $this->getResultsForEmail();
		
		$Mail->send($to, $subject, $body);
	}
	
	public function getResultsForEmail() {
		$quiz = $this->getQuizsetup();
		
		$correctAnswers = $this->getCorrectAnswerCount();
		$totalAnswers = $this->getTotalAnswerCount();
		$letterGrade = $this->getLetterGrade();
		
		$body = "Quiz submitted with $correctAnswers of $totalAnswers questions answered correctly.\n<br />";
		$body .= "Grade: $letterGrade\n<br />\n<br />";
		
		foreach ($quiz['sections'] as $section) {
			$body .= "Section: $section[title]\n<br />";
			
			foreach ($section['questions'] as $question) {
				$body .= "Question: $question[question]\n<br />";
				$body .= "Answer: $question[userAnswer]\n<br />";
				$body .= "Correct answer: $question[answer]\n<br />";
				$body .= "\n<br />";
			}
		}
		
		return $body;
	}
}