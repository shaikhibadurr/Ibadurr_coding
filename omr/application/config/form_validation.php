<?php

		$config=[
						'login_rules'=>[
									[

								'field'=>'username',
								'label'=>'User Name',
								'rules'=>'required|valid_email',
								],
								[
								'field'=>'password',
								'label'=>'Password',
								'rules'=>'required|min_length[8]|max_length[12]|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/]',
								]
							]







		]
















?>