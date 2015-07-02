public function create_button($name, $id, $type, $value){
	
		if($this->counter % 2 ==1){
			$txt1 = "
					<div class=\"col-md-6\" >
						<div class=\"form-group\"> 							
						</div>
					</div>
				</div>

													
					";

			$txt2 = "
					<div class=\"row\">

						<div class=\"col-md-6\" >

							<div class=\"form-group\" > 
							
								<input name=\"".$name."\" type=\"".$type."\" class=\"next action-button\" 
							      value=\"".$value."\">
								<span class=\"help-block\" style=\"left:70px;\">".$this->counter."</span>
								

							
						</div>

					</div>
				";
			}else{
				$txt1 = "
						<div class=\"row\">

							<div class=\"col-md-6\" >

								<div class=\"form-group\" > 
								
									<input name=\"".$name."\" type=\"".$type."\" class=\"next action-button\" 
								      value=\"".$value."\">
									<span class=\"help-block\" style=\"left:70px;\">".$this->counter."</span>
									

								
							</div>

						</div>
				";
			}

		if($this->counter % 2 == 0) $this->formText .= $txt1;
		else $this->formText .= $txt2;
		$this->counter++;

	}



	////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$txt1 = "
				<div class=\"row\">

					<div class=\"col-md-6\" >

						<div class=\"form-group\" > 
						
							<input name=\"".$name."\" type=\"".$type."\" class=\"next action-button\" 
						      value=\"".$value."\">
							<span class=\"help-block\" style=\"left:70px;\">".$this->counter."</span>
							

						
					</div>

				</div>
							
				";

		$txt2 = "
				<div class=\"col-md-6\" >

					<div class=\"form-group\">  
						
							<input name=\"".$name."\" type=\"".$type."\" class=\"previous action-button\" 
						      value=\"".$value."\">
							<span class=\"help-block\">".$this->counter."</span>			  
						
					</div>

				</div>
			</div>
				";

		if($this->counter % 2 == 0) $this->formText .= $txt1;
		else $this->formText .= $txt2;
		$this->counter++;

		<input id="family_member1" name="family_member" type="text" style="width:200px; " value="" placeholder="Enter family member" class="form-control input-"/>