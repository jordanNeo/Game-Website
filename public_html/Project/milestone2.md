<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Jordan Lee(jal88)</td></tr>
<tr><td> <em>Generated: </em> 7/18/2022 2:31:18 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone-2-arcade-project/grade/jal88" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Pick a game... </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game will you be doing?</td></tr>
<tr><td> <em>Response:</em> <p>Right now my game is a arcade shooter where enemies try to reach<br>the end of the screen that was featured in M6. You have to<br>shoot the enemies before they reach the end. It is two player if<br>you want it to be. I will be changing my game to a<br>snake game however later.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly describe it and its mechanics</td></tr>
<tr><td> <em>Response:</em> <p>The main mechanics of the game are a ship object that is just<br>a square. The square has variables in event listeners linked to keyboard buttons<br>that allow you to move it up and down. Bullets are drawn starting<br>at the ship and can only be shot when another bullet is not<br>currently on the screen. The enemies are objects that are pushed into an<br>array and called into a function then spliced out of the array at<br>different points on the screen with varying speed. The function that handles everything<br>else in the game is a function isColliding() that uses the coordinate variables&nbsp;<br>of each of the two objects passed as parameters to determine if objects<br>are touching. This handles loss of health,&nbsp; and enemies dying.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing something of the game</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/179440442-dbfbc5f9-9405-47f6-9fef-0cb9f12f4fb8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>game with bullets and enemies on screen<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/50">https://github.com/jordanNeo/IT202-451/pull/50</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/game.html">https://jal88-prod.herokuapp.com/Project/game.html</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Saving Score </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing a notice telling the user their score was saved</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/179443768-e1882796-cc00-43be-b038-89761cc28bb4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing score was saved<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of your scores table with some score entries</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/179443985-2a39bb46-96be-47d3-b814-dfc21ddbf391.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>scores table with some scores from 2 user_id&#39;s<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow of saving a score from the game</td></tr>
<tr><td> <em>Response:</em> <div>Each received score should be a new entry (scores will not be updated)</div><div>When<br>the game ends a function postData is called that has a link to<br>save_score.php. The function uses the fetch api to POST into the http header<br>of the desired url (save_score). The body is a set of key value<br>pairs that are mapped to a query string. In my case the only<br>key value pair I have is score=(whatever) so this is all that gets<br>posted. The save score function gets the score from the http header and<br>checks to make sure the browser currently is in a session. If a<br>user is logged in the function will retrieve the user_id using functions from<br>user_helpers&nbsp; and insert into the scores table using the passed score and the<br>user_id.</div><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/50">https://github.com/jordanNeo/IT202-451/pull/50</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's last 10 scores </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the latest scores for the user from their profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/179444138-08a7214e-dc96-4189-8df6-afebe48b23cf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>scores table on profile page showing a couple  of the latest scores<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the scores are being pulled and displayed</td></tr>
<tr><td> <em>Response:</em> <p>First to get the best score the page calls get_best_score from score_helpers that<br>fetches the first record from a list of all the scores ordered from<br>highest to lowest of the user matching the user_id of the session. The<br>profile page then rquires the partial scores_table.php with the $duration parameter set to<br>&quot;latest&quot;&nbsp; which tells scores_table to call get_latest_scores, a function in the scores helpers<br>that queries for only the scores of the particular user of the session<br>and shows the 10&nbsp; most recently gotten scores by ordering by the created<br>column.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/50">https://github.com/jordanNeo/IT202-451/pull/50</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/profile.php">https://jal88-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Create function(s) for outputiting the 3 different scoreboard durations (weekly, monthly, lifetime) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot (or screenshots) showing the function(s)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/179442349-ed715738-488d-4ba7-9976-b870e8bc0c6c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>gettop10 function with functionality for daily, weekly, monthly and lifetime.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain the process of how the code works</td></tr>
<tr><td> <em>Response:</em> <p>There is only one function for the output of scoreboard durations, get_top_10. This<br>function take a input of a $duration parameter that determines what will be<br>appended to the query. Depending on if $duration is set to day, week,<br>month, or lifetime the get_top_10 function make sure the Scores.created column function is<br>greater than the start of the time frame the $duration parameter determines. It<br>will also make sure the created column of all the scores fetched is<br>not greater than the end of the time frame referenced. The scores are<br>ordered by descending ordered highest to lowest and so is the created timestamp.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/50">https://github.com/jordanNeo/IT202-451/pull/50</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Home Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the scoreboads, the link to the game and description, and the proper heading</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/179441687-b8529db0-3590-49e3-90e0-a77cc0e6ef91.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Home page with heading, scoreboards, description, and link to the game.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the different pieces are retrieved and shown to the user</td></tr>
<tr><td> <em>Response:</em> <p>The heading is just a regular html tag. The link is a regular<br>link tag that is linked to the game in the project folder. The<br>description is a p tag within a div with several line breaks.<div>All of<br>the scoreboards are php calls of &quot;require&quot; and it references the partial scores_table.php.<br>The $duration variable is set to determine which query scores_table runs and the<br>table is set up accordingly.</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/50">https://github.com/jordanNeo/IT202-451/pull/50</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/home.php">https://jal88-prod.herokuapp.com/Project/home.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/179578617-5f49076a-b222-4134-a1d0-5180607cd4f5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>first three issues<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/179578627-ed4061b6-cb95-4b8e-8e38-ea74a97e6cc5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>last 2 issues<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/login.php">https://jal88-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone-2-arcade-project/grade/jal88" target="_blank">Grading</a></td></tr></table>