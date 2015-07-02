<?php
	/**
	* This class creates form items. It defines elements used on a form
	*
	**/
	class oneColform {
		public $formText;

		public $counter=0;
		
		public function __construct(){
			$this->formText = "";
		}

		public function create_form( $name, $action){
			$this->formText = "
								<form class=\"form-horizontal\" role=\"form\" name = \"".$name."\" id=\"formTable\" novalidate>
							";
		}

		public function create_textfield($name, $type, $id, $label, $value){
			$col = "
					<div class=\"row\">

					<div class=\"col-md-6\" >

						<div class=\"form-group\">
							<label class=\"col-md-4 control-label\" for=\"textinput\">".$label."</label>  
							<div class=\"col-md-8\">
								<input id=\"".$id."\" name=\"".$name."\" type=\"".$type."\" value=\"".$value."\"
								 placeholder=\"placeholder\" class=\"form-control input-\">
								<span class=\"help-block\"></span>			  
							</div>
						</div>

					</div>
				</div>			
					";

				$this->formText .= $col;
			
		}

		public function create_button($name, $id, $value){
		
			 $btn =			"
			 				 <div class=\"form-group\">
							    <div class=\"col-sm-offset-2 col-sm-10\">
							      <input type=\"submit\" class=\"btn btn-info\" value=\"".$value."\" name=\"".$name."\">
							    </div>
								</div>					        
					          </form>
							  ";

			
			 $this->formText .= $btn;
		}



		public function create_selectOption($name, $id, $label, $array){
			

			$select = "		<div class=\"row\">
								<div class=\"col-md-6\" >
						          <div class=\"form-group\">
									<label class=\"col-md-4 control-label\" for=\"textinput\">".$label."</label>  
									<div class=\"col-md-8\">
						            <select name=\"".$name."\" id=\"".$id."\" class=\"form-control input-\">
						        	";
						        	foreach ($array as $key => $value) {
							    		# code...
							    		$select.=  " <option value=\"".$value."\">".$key."</option>";
							    	}

							    	$select .= "
						              
				                  	</select>
				                  	<span class=\"help-block\"></span>
				                  </div>
				                 </div>
				                </div>
				                </div>

				                 ";
				$this->formText .= $select;

		}

		public function create_textArea($name, $type, $id, $label, $value){

			$scol = "
					<div class=\"col-md-6\" >

						<div class=\"form-group\" >
							<label class=\"col-md-4 control-label\" for=\"".$id."\">".$label."</label>  
							<div class=\"col-md-8\">
								<textarea id=\"".$id."\" name=\"".$name."\"  value=\"".$value."\"
								 placeholder=\"placeholder\" class=\"form-control input-\" >
								</textarea>
								<span class=\"help-block\"></span>			  
							</div>
						</div>

						</div> 
					</div>
					";

				$this->formText .= $scol;
			
		}
		

	}


	class twoColForm {

		public $formText;

		public $counter=1;
		
		public function __construct(){
			$this->formText = "";
		}

		public function create_form( $name, $formID, $action){
			$this->formText = "
								<form class=\"form-horizontal\" role=\"form\" name = \"".$name."\" id=\"".$formID."\"
								 method=\"post\" action=\"".$action."\" novalidate>
							";
		}

		public function create_textField($name, $type, $id, $label, $placeholder, $value){
			$fcol = "
					<div class=\"row\">

					<div class=\"col-md-6\" >

						<div class=\"form-group\">
							<label class=\"col-md-4 control-label\" for=\"".$id."\">".$label."</label>  
							<div class=\"col-md-8\">
								<input id=\"".$id."\" name=\"".$name."\" type=\"".$type."\" value=\"".$value."\" 
								 placeholder=\"".$placeholder."\" class=\"form-control input-\" >
								<span class=\"help-block\" ></span>
								

							</div>
						</div>

					</div>
								
					";

			$scol = "
					<div class=\"col-md-6\" >

						<div class=\"form-group\">
							<label class=\"col-md-4 control-label\" for=\"".$id."\">".$label."</label>  
							<div class=\"col-md-8\">
								<input id=\"".$id."\" name=\"".$name."\" type=\"".$type."\" value=\"".$value."\"
								 placeholder=\"placeholder\" class=\"form-control input-\" >
								<span class=\"help-block\"></span>			  
							</div>
						</div>

						</div>
					</div>
					";

			if($this->counter % 2 == 0) {
				$this->formText .= $fcol;
			}else {
				# code...
				$this->formText .= $scol;
			}

			//$this->formText .= ;
			$this->counter++;
		}

		public function create_button($name, $id, $value){
		
			 $txt1 =			"			 						
			 				  <div class=\"form-group\">
							    <div class=\"col-sm-offset-2 col-sm-10\">
							      <input name=\"".$name."\" type=\"submit\" class=\"btn btn-info\" 
							      value=\"".$value."\">
							    </div>
								</div>					        
					          </form>
							  ";
			 $txt2 =			"						
							   <div class=\"form-group\">
							     <div class=\"col-sm-offset-2 col-sm-10\">
							      <input name=\"".$name."\" type=\"submit\" class=\"btn btn-info\" 
							      value=\"".$value."\">
							    </div>
								</div>					        
					          </form>
							  ";

			if($this->counter % 2 == 0) $this->formText .= $txt1;
			else $this->formText .= $txt2;
		}

		public function create_selectOption($name, $column, $label, $array){
			

			$colA = "		<div class=\"row\">
								<div class=\"col-md-6\" >
						          <div class=\"form-group\">
									<label class=\"col-md-4 control-label\" for=\"".$name."\">".$label."</label>  
									<div class=\"col-md-8\">
						            <select name=\"".$name."\" id=\"".$name."\" class=\"form-control input\">
						        	";
							        	foreach ($array as $key => $value) {
								    		# code...
								    		$colA .=  " <option value=\"".$value."\">".$key."</option>";
								    	}

							    	//$select .= ";

			$colA .= "						              
				                  	</select>
				                  	<span class=\"help-block\"></span>
				                  </div>
				                 </div>
				                </div>

				                  ";
			
			$colB =		"						
						         <div class=\"col-md-6\" >
						          <div class=\"form-group\">
									<label class=\"col-md-4 control-label\" for=\"".$name."\">".$label."</label>  
									<div class=\"col-md-8\">
						            <select ng-model=\"formData.".$name."\" name=\"".$name."\" id=\"".$name."\" 
						            class=\"form-control input\">
						            <option style=\"display:none\" value=\"\">- Select -</option>
						        	";
						        	foreach ($array as $key => $value) {
								    		# code...
								    		$colB .=  " <option value=\"".$value."\">".$key."</option>";
								    	}

			$colB .= "
						              
				                  	</select>
				                  	<span class=\"help-block\"></span>
				                  </div>
				                 </div>
				                </div>
				               </div>
					     ";

			if($this->counter % 2 == 0) $this->formText .= $colA;
			else $this->formText .=$colB;
			$this->counter++;

		}

		public function breakLine(){
			$this->formText .= "<div><br><br></div>";
		}

		public function create_dateField($name, $id, $label, $value){
			$fcol = "
					<div class=\"row\">

					<div class=\"col-md-6\" >

						<div class=\"form-group\">
							<label class=\"col-md-4 control-label\" for=\"".$id."\">".$label."</label>  
							<div class=\"col-md-8\">
								<input id=\"".$name."\" name=\"".$name."\" type=\"date\" value=\"".$value."\"
								  placeholder=\"sadfasdfasd\" class=\"form-control input-\" >
								<span class=\"help-block\"></span>
								
							</div>
						</div>

					</div>
								
					";

			$scol = "
					<div class=\"col-md-6\" >

						<div class=\"form-group\">
							<label class=\"col-md-4 control-label\" for=\"".$id."\">".$label."</label>  
							<div class=\"col-md-8\">
								<input id=\"".$name."\" name=\"".$name."\" type=\"date\" value=\"".$value."\" 
								 placeholder=\"samy\" class=\"form-control input-\" >
								<span class=\"help-block\"></span>			  
							</div>
						</div>

						</div>
					</div>
					";

			if($this->counter % 2 == 0) {
				$this->formText .= $fcol;
			}else {
				# code...
				$this->formText .= $scol;
			}

			//$this->formText .= ;
			$this->counter++;
		}

	}


class multiStepForm {

	public $formText;

	public $counter=0;
	
	public function __construct(){
		$this->formText = "";
	}

	public function create_form( $name, $formID, $action){
		$this->formText = "
							<form class=\"form-horizontal\" role=\"form\" name = \"".$name."\" id=\"".$formID."\"
							 method=\"post\" action=\"".$action."\" novalidate>
						";
	}

	public function progress_bar($level1, $level2, $level3) {
		$this->formText .= "
							<!-- progressbar -->
								<ul id=\"progressbar\">
									<li class=\"active\">".$level1."</li>
									<li>".$level2."</li>
									<li>".$level3."</li>
								</ul>
						  ";

	}
	

	public function create_textField($name, $type, $id, $label, $placeholder, $value){
		$fcol = "
				<div class=\"row\">

					<div class=\"col-md-6 \" >

						<div class=\"form-group\" >
							<label class=\"col-md-4 control-label\" for=\"".$id."\">".$label."</label>  
							<div class=\"col-md-8 \"  >
								<input id=\"".$id."\" name=\"".$name."\" type=\"".$type."\" style=\"width:200px; \" value=\"".$value."\" 
								 placeholder=\"".$placeholder."\" class=\"form-control input-\" >
								<span id=\"".$id."-error\" class=\"help-block\" ></span>
								

							</div>
						</div>

					</div>
							
				";

		$scol = "
				<div class=\"col-md-6 \" >

					<div class=\"form-group\">
						<label class=\"col-md-4 control-label\" for=\"".$id."\">".$label."</label>  
						<div class=\"col-md-8 pull-right\">
							<input id=\"".$id."\" name=\"".$name."\" type=\"".$type."\" 
							value=\"".$value."\" style=\"width:200px;\"  placeholder=\"placeholder\" class=\"form-control input-\" >
							<span id=\"".$id."-error\" class=\"help-block\"></span>			  
						</div>
					</div>

					</div>
				</div>
				";

		if($this->counter % 2 == 0) {
			$this->formText .= $fcol;
		}else {
			# code...
			$this->formText .= $scol;
		}

		//$this->formText .= ;
		$this->counter++;
	}

	public function create_single_button($name, $id, $type, $value){
	
		if($this->counter % 2 == 0 ){

			$txt = "
					<div class=\"row\">
						<div class=\"col-md-6\" style=\"left:150px;\">
							<div class=\"form-group\" >							
								<input name=\"".$name."\" id=\"".$name."\" type=\"".$type."\" class=\"next action-button\" value=\"".$value."\">
								<span class=\"help-block\" style=\"left:70px;\"></span>						
							</div>
						</div>								
					";

			$txt .= "
					<div class=\"col-md-6\" >
						<div class=\"form-group\"> 							 
							
						</div>
					</div>
				</div>
					";
			}else{
				$txt = "
						<div class=\"col-md-6\" >
							<div class=\"form-group\"> 							
						</div>
					</div>
				</div>
					";

				$txt .= "
					<div class=\"row\">
						<div class=\"col-md-6\" >
							<div class=\"form-group\" > 							
								<input name=\"".$name."\" type=\"".$type."\" class=\"next action-button\" 
							      value=\"".$value."\">
								<span class=\"help-block\" style=\"left:70px;\"></span>							
						</div>
					</div>
					<div class=\"col-md-6\" >
						<div class=\"form-group\"> 							
						</div>
					</div>
				</div>			
					";			
			}

		$this->formText .= $txt;
		//$this->counter++;
	}

	public function create_prev_button($name, $id, $type, $value){
		$txt = "
					<div class=\"row\" style=\"margin:auto;\">
						<div class=\"col-md-6\" style=\"left:300px; width:110px; height:40px;\" >
							<div class=\"form-group\">							
								<input name=\"".$name."\" type=\"".$type."\" class=\"previous action-button\" value=\"".$value."\">
								<span class=\"help-block\" style=\"left:70px;\"></span>						
							</div>
						</div>								
					";
		$this->formText .= $txt;
	}

	public function create_next_button($name, $id, $type, $value){
		$txt = "<div class=\"col-md-6\" style=\"left:350px; width:110px; height:40px;\">
						<div class=\"form-group\"> 
							<input name=\"".$name."\" type=\"".$type."\" class=\"".$name." action-button\" value=\"".$value."\">
							<span class=\"help-block\" style=\"left:70px;\"></span>							
						</div>
					</div>
				</div>			
					";
		$this->formText .= $txt;
	}

	public function create_selectOption($name, $column, $label, $array){
		

		$colA = "		<div class=\"row\">
							<div class=\"col-md-6\" >
					          <div class=\"form-group\">
								<label class=\"col-md-4 control-label\"  for=\"".$name."\">".$label."</label>  
								<div class=\"col-md-8\">
					            <select name=\"".$name."\" id=\"".$name."\" class=\"form-control input\" style=\"width:200px; \">
					        	";
						        	foreach ($array as $key => $value) {
							    		# code...
							    		$colA .=  " <option value=\"".$value."\">".$key."</option>";
							    	}

						    	//$select .= ";

		$colA .= "						              
			                  	</select>
			                  	<span id=\"".$name."-error\"class=\"help-block\"></span>
			                  </div>
			                 </div>
			                </div>

			                  ";
		
		$colB =		"						
					         <div class=\"col-md-6\" >
					          <div class=\"form-group\">
								<label class=\"col-md-4 control-label\" for=\"".$name."\">".$label."</label>  
								<div class=\"col-md-8\">
					            <select  name=\"".$name."\" id=\"".$name."\" style=\"width:200px;\"
					            class=\"form-control input\">
					            
					        	";
					        	foreach ($array as $key => $value) {
							    		# code...
							    		$colB .=  " <option value=\"".$value."\">".$key."</option>";
							    	}

		$colB .= "
					              
			                  	</select>
			                  	<span id=\"".$name."-error\" class=\"help-block\"></span>
			                  </div>
			                 </div>
			                </div>
			               </div>
				     ";

		if($this->counter % 2 == 0) $this->formText .= $colA;
		else $this->formText .=$colB;
		$this->counter++;

	}

	public function create_submit_button($name, $type, $value){

			$txt = "
					<div class=\"row\">
						<div class=\"col-md-6\" style=\"left:150px;\">
							<div class=\"form-group\">							
								<input name=\"".$name."\" type=\"".$type."\" class=\"previous action-button\" value=\"".$value."\">
								<span class=\"help-block\" style=\"left:70px;\"></span>						
							</div>
						</div>								
					";

			$txt .= "
					<div class=\"col-md-6\" >
									
							<div class=\"form-group\" >							
								<input name=\"".$name."\" id =\"".$name."\"type=\"submit\" class=\"submit action-button\" 
								 value=\"Submit\">

								 <button type=\"button\" style=\"width:26px; height:26px; position:absolute; right:62px;\" id=\"add_field\"><i class=\"fa fa-plus-circle\"></i></button>
								 <button type=\"button\" style=\"width:26px; height:26px; position:absolute; right:33px;\" id=\"remove_field\"><i class=\"fa fa-minus-circle\"></i></button>


								<span class=\"help-block\" style=\"left:70px;\"></span>	
								<span ></span>					
							</div>	
						
					</div>
				</div>
					";
					$this->formText .= $txt;
	}

	public function open_fieldset($fs_id){
		$this->formText .= "<fieldset id=\"".$fs_id."\">";
	}

	public function close_fieldset(){
		$this->formText .= "</fieldset>";
	}

	public function close_form(){
		$this->formText .= "</form>";
	}

	public function create_dateField($name, $id, $label, $value){
		$fcol = "
				<div class=\"row\">

				<div class=\"col-md-6\" >

					<div class=\"form-group\">
						<label class=\"col-md-4 control-label\" for=\"".$id."\">".$label."</label>  
						<div class=\"col-md-8\">
							<input id=\"".$name."\" name=\"".$name."\" type=\"date\" value=\"".$value."\" style=\"width:200px;\"
							  placeholder=\"sadfasdfasd\" class=\"form-control input-\" >
							<span  id=\"".$id."-error\" class=\"help-block\"></span>
							
						</div>
					</div>

				</div>
							
				";

		$scol = "
				<div class=\"col-md-6\" >

					<div class=\"form-group\">
						<label class=\"col-md-4 control-label\" for=\"".$id."\">".$label."</label>  
						<div class=\"col-md-8\">
							<input id=\"".$name."\" name=\"".$name."\" type=\"date\" value=\"".$value."\" 
							 placeholder=\"samy\" class=\"form-control input-\">
							<span id=\"".$id."-error\" class=\"help-block\"></span>			  
						</div>
					</div>

					</div>
				</div>
				";

		if($this->counter % 2 == 0) {
			$this->formText .= $fcol;
		}else {
			# code...
			$this->formText .= $scol;
		}

		//$this->formText .= ;
		$this->counter++;
	}

	function add_dynamic_field($array){
		$fcol = "
				<div class=\"row\" id=\"dynamic_row\">

					<div class=\"col-md-6 \" >

						<div class=\"form-group\" >
							<label class=\"col-md-4 control-label\" for=\"family_member\">Family Members: </label>  
							<div class=\"col-md-8 \"  >
								<input id=\"family_member\" name=\"family_member\" type=\"text\" style=\"width:200px; \" value=\"\" 
								 placeholder=\"Enter family member\" class=\"form-control input-\">
								<span id=\"family_member-error\" class=\"help-block\" ></span>
								

							</div>
						</div>

					</div>
							
				";

		$fcol .= "
		         <div class=\"col-md-6\" >
					          <div class=\"form-group\">
								<label class=\"col-md-4 control-label\" for=\"relation\">Relationship</label>  
								<div class=\"col-md-8\">
					            <select  name=\"relation\" id=\"relation\" style=\"width:200px;  \"
					            class=\"form-control input\">
					            
					        	";
					        	foreach ($array as $key => $value) {
							    		# code...
							    		$fcol .=  " <option value=\"".$value."\">".$key."</option>";
							    	}

		$fcol .= "
					              
			                  	</select>
			                  	<span id=\"relation-error\" class=\"help-block\"></span>
			                  </div>
			                 </div>
			                </div>
			               </div>
				     ";

				     $this->formText .= $fcol;

	}

}
?>