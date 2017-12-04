<h2 class="text-center"><em>User Survey</em></h2>

			<form method="post" action="database_action.php">

			<div class="row">

				<div class="input-lg col-sm-6">
					<!-- <i>account_circle</i> -->
					<label for="name"> Name: </label>
					<input type="text" name="name" id="name" required>
				</div>

				<div class="input-lg col-sm-6">
					<!-- <i class="material-icons prefix">email</i> -->
					<input type="email" name="email" id="email" class="validate" required>
					<label for="email" data-error="Please enter a valid email">Email: </label>
				</div>

			</div>

			<fieldset>

				<legend>Front-End Frameworks</legend>

				<div>What is your favorite front-end framework?</div>

				<div>

					<p>
						<input type="radio" name="framework" id="bootstrap" value="Bootstrap">
						<label for="bootstrap">Bootstrap</label>
					</p>

					<p>
						<input type="radio" name="framework" id="foundation" value="Foundation">
						<label for="foundation">Foundation</label>
					</p>

					<p>
						<input type="radio" name="framework" id="stylus" value="Stylus">
						<label for="stylus">Stylus</label>
					</p>

					<p>
						<input type="radio" name="framework" id="materialize" value="Materialize">
						<label for="materialize">Materialize</label>
					</p>

					<p>
						<input type="radio" name="framework" id="semantic" value="Semantic">
						<label for="semantic">Semantic UI</label>
					</p>

					<p>
						<input type="radio" name="framework" id="pure" value="Pure">
						<label for="pure">Pure</label>
					</p>

					<p>
						<input type="radio" name="framework" id="uikit" value ="UIKit">
						<label for="uikit">UIKit</label>
					</p>

					<p>
						<input type="radio" name="framework" id="milligram" value="Milligram">
						<label for="milligram">Milligram</label>
					</p>

					<p>
						<input type="radio" name="framework" id="skeleton" value="Skeleton">
						<label for="skeleton">Skeleton</label>
					</p>

					<p>
						<input type="radio" name="framework" id="susy" value="Susy">
						<label for="susy">Susy</label>
					</p>

				</div>


				<div>Which features of this front-end framework are the most important to you?</div>

					<div>

					<p>
						<input type="checkbox" name="feature[]" id="flex" value="Flexibility">
						<label for="flex">Flexibility</label>
					</p>

					<p>
						<input type="checkbox" name="feature[]" id="browser" value="Browser Compatability">
						<label for="browser">Browser Compatability</label>
					</p>

					<p>
						<input type="checkbox" name="feature[]" id="community" value="Community & Popularity">
						<label for="community">Community & Popularity</label>
					</p>

					<p>
						<input type="checkbox" name="feature[]" id="mobile" value="Mobile Friendly">
						<label for="mobile">Mobile Friendly</label>
					</p>

					<p>
						<input type="checkbox" name="feature[]" id="stability" value="Stability">
						<label for="stability">Stability</label>
					</p>

					<p>
						<input type="checkbox" name="feature[]" id="speed" value="Speed">
						<label for="speed">Speed</label>
					</p>

					<p>
						<input type="checkbox" name="feature[]" id="readability" value="Readability">
						<label for="readability">Code Readability</label>
					</p>

					</div>


				<div >Which features do you think this front-end framework can improve on?</div>

					<div>

					<p>
						<input type="checkbox" name="improveFeat[]" id="flex2" value="Flexibility">
						<label for="flex2">Flexibility</label>
					</p>

					<p>
						<input type="checkbox" name="improveFeat[]" id="browser2" value="Browser Compatability">
						<label for="browser2">Browser Compatability</label>
					</p>

					<p>
						<input type="checkbox" name="improveFeat[]" id="community2" value="Community & Popularity">
						<label for="community2">Community & Popularity</label>
					</p>

					<p>
						<input type="checkbox" name="improveFeat[]" id="mobile2" value="Mobile Friendly">
						<label for="mobile2">Mobile Friendly</label>
					</p>

					<p>
						<input type="checkbox" name="improveFeat[]" id="stability2" value="Stability">
						<label for="stability2">Stability</label>
					</p>

					<p>
						<input type="checkbox" name="improveFeat[]" id="speed2" value="Speed">
						<label for="speed2">Speed</label>
					</p>

					<p>
						<input type="checkbox" name="improveFeat[]" id="readability2" value="Readability">
						<label for="readability2">Code Readability</label>
					</p>

					</div>

			</fieldset>

			<fieldset>
				<legend>Suggestions</legend>

				<div class="row">

					<div class="input-lg col-sm-12">
						<textarea name="suggestion" id="suggestion" class="materialize-textarea" data-length="300"></textarea>
						<label class="big" for="suggestion">Do you recommend any other features that you would like to see added?</label>
					</div>


					<div class="input-lg col-sm-12">
						<textarea name="recommend" id="recommend" class="materialize-textarea" data-length="300"></textarea>
						<label class="big" for="recommend">Do you recommend any other front-end frameworks not listed in this survey?</label>
					</div>

					<div class="text-center">
						<button type="submit" name="Submit">Submit</button>
					</div>

				</div>

			</fieldset>

			</form>