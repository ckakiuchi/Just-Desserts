	<!-- main content -->
	<!-- Main Pudding content -->
	<div id="main">
		<div id="mainpudding">
		<div class="puddingmain">
			<h2>CHEESECAKE</h2>
		</div>

			<!-- Image of Pudding -->
			<div class="puddingimage">
				<img src="./images/pudding.jpg" alt = "pudding">
			</div>

			<!-- Table of Ingredients -->
			<div class="puddingtable">
				<table>
					<tr>
						<th>Quantity</th>
						<th>Ingredients</th>
					</tr>
					<tr>
						<td>1 cup</td>
						<td>Granulated sugar</td>
					</tr>
					<tr>
						<td>3/4 cup</td>
						<td>Corn starch</td>
					</tr>
					<tr>
						<td>3/4 cup</td>
						<td>Dry milk powder</td>
					</tr>
					<tr>
						<td>1 teaspoon</td>
						<td>Kosher salt</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Whole vanilla beans</td>
					</tr>
				</table>
			</div>

			<!-- Directions to make Pudding -->
			<div class="puddingbody">
				<h2>Directions</h2>
				<div class="puddingdirections">
					<ol>
						<li>In a medium bowl, whisk together the sugar, cornstarch, milk
						powder, and salt; set aside.</li>
						<li>Split open the vanilla beans and use the back of a knife to
						scrape out the seeds. Add the seeds to the sugar mixture, and again
						whisk well to evenly combine, using a fork or the back of the spoon
						to break up any chunks of vanilla bean seeds. Cut the empty vanilla
						bean pods into two or three pieces each.</li>
						<li>Place the vanilla bean pieces into an airtight container or jar,
						and add the sugar mixture. Seal it, and then give it a few good
						shakes to distribute the vanilla bean pieces evenly. Store in a cool,
						dry place.</li>
						<li>To make pudding: Combine 2 cups of milk with ½ cup of the instant
						pudding mix in a medium saucepan over high heat, whisking constantly.
						Bring to a boil, and then immediately reduce the heat to a simmer and
						continue whisking until the mixture thickens and coats the back of a
						spoon (about 3 to 5 minutes). Let sit for at least 5 minutes before
						serving. Store leftovers in an airtight container in the refrigerator.</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
		<!-- Start of Comment section-->
		<div class="commentbox">
		  <form id="commentForm">
			  <div class="comments">
				<div class="comment_title">
				  <h2>Comments</h2>
				</div><br>
				<label for="sortBy" class="sortBy">Sort by: </label>
				  <select onblur="warnSortInvalid('sortBy')" id="sortBy" name="sortBy">
					<option value="" selected disabled>Sort by...</option>
					<option value="newest">By newest date</option>
					<option value="oldest">By oldest date</option>
					<option value="aToZ">By username (A-Z)</option>
				   <option value="zToA">By username (Z-A)</option>
				  </select><br><hr>
				  <div id="posts"></div>

				  <br><hr>
				<!-- Textarea for comments-->
				<label class="taComments" for="taComments">Type your comment here!</label>
				  <textarea name="post" id="taComments"></textarea><br><br>

				<!-- Submit Button -->
				<input type="submit" value="Submit" onclick='postComment()'><br><br>
			  </div>
		  </form>
		</div>
		<!-- End of Comment section-->
