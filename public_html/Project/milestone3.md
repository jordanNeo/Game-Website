
<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Jordan Lee(jal88)</td></tr>
<tr><td> <em>Generated: </em> 8/1/2022 1:12:00 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone-3-arcade-project/grade/jal88" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 4</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will have credits associated with their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/f2c037/000000?text=Partial"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the user's table with the new credits column with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182039808-cceb9b4a-28c6-486f-a248-facf3473f35f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>users table with new credits field<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the code/sql that properly updates the credit/balance value based on CreditHistory</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182039818-d7338e00-a687-45f6-b296-91b1d928a9db.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>code showing function to update user table without incrementation<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the credits displaying on the user's profile page (a value > 0 must show)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182039822-4a867777-fc71-46c1-9cf6-f34fd8725cae.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>credits displayed on a users profile page under the best score<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot showing the code snippet of how the credits are fetched/displayed on the profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182039814-31b0873c-cd4c-45b5-ba78-ff5e8ee22a7e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>get_credits function and where it is implemented<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process for updating the credit/balance value and displaying it on the profile page</td></tr>
<tr><td> <em>Response:</em> <p>In order to update the credit balance there is a function refresh_user_credits which<br>is inside another function called give_credits. Give credits just uses the information passed<br>to make additions to the CreditHistory table and then calls refresh credits to<br>do the work of updated the users table. Refresh credits uses a query<br>to set the &quot;credits&quot; column equal to another query that finds the sum<br>of the &quot;diff&quot; column in the CreditsHistory table for a given user_id. The<br>diff column has a record of all the credits awarded to a player.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file (profile page)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/profile.php">https://jal88-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Create a CreditHistory Table </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the CreditHistory table with valid records having been recorded</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182040053-5fe7d28b-3863-406d-9cac-f76c4fb3109c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>credit history table with records recorded and profile page showing the credits that<br>are in the table, the records for  user_id:1 relate to the email<br>jal88 which is showed on the profile page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="// "> </a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Competitions Table </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the Competitions table with valid records having been recorded</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182047163-14ab4753-5af1-4284-9dbd-db79d1646d45.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>competitions table with competitions created by two users<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/59">https://github.com/jordanNeo/IT202-451/pull/59</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to create a competition </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Create Competition form with valid date filled in (including the expected cost)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182047533-272d0678-0a41-4d3e-8879-93ca1e9f43c7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>competition for filled out with a competition &quot;NewComp&quot;<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot(s) showing success and error messages of the creation process</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182047343-d378d7c2-b6ce-4db8-a56b-4c4a5ebca244.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>message telling user they dont have enough credits after submission<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182047296-df3c4105-5d48-4a95-bb90-273cd747d80b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>client side validation of payout that doesn&#39;t add up to 100%<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the new record in the Competitions table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182047580-0d3efce0-6571-4e39-9082-72a3df92b994.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>competition &quot;NewComp&quot; in the database with valid info<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182047606-afa02185-f226-4c8f-96fc-8366a6963738.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>second page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the CreditHistory related to creating this competition</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182047651-ceb18822-7c64-4e1c-aaee-98498555cc2f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>credit history table transaction 22 showing a deduction of credits for creating a<br>competition<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot of the CompetitionParticipants table with the new record for this competition</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182047703-4dd5c1b9-9200-4c8b-9889-b438072b69f8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>userComps table showing record number 3 as the entry for NewComp<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/59">https://github.com/jordanNeo/IT202-451/pull/59</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the code flow for the creation process</td></tr>
<tr><td> <em>Response:</em> <ol><br><li>Create competitions page has a form that post to http header. With<br>form names that equal the table columns.<div>2. Client side validates info making sure<br>payout is = 100,calculating cost ,etc.</div><div>3.Server side calls get credits making sure user<br>has more credits than the cost.</div><div>4.Server side deducts credits from the users account.</div><div>5.<br>Then calls save data with the information populating the http header to input<br>data into competitions table.</div><div>6. Calls add to competition with the first participant, the<br>creator.</div><div>7. If 3-6 fail rollback all calls.</div><br></li><br></ol><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add a direct link to heroku prod for this file (create competition)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/create_competition.php">https://jal88-prod.herokuapp.com/Project/create_competition.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Each new participant causes the Reward value to increase by 50% of the joining fee rounded up </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add before and after screenshots of the Competition record in the DB when a user joins (showing the reward change)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182051272-cbf66579-8dfb-4a58-b4f2-282ae2efb21d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>competitions table before joining (1st record)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182051280-23122b67-460a-413b-a6bd-7177263f112f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>competitions table after joining (1st record)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the reward calculation logic (code)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182050798-f3d0d802-0e25-4e3f-bebe-c89dd548aa64.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>reward fee calculation in update function<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the calculation</td></tr>
<tr><td> <em>Response:</em> <p>Any time the a player is added to a competition and update participants<br>is called the current reward is set to the value of itself plus<br>the value of the joining fee cut in half and rounded up.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/59">https://github.com/jordanNeo/IT202-451/pull/59</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (join competition)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/list_competitions.php">https://jal88-prod.herokuapp.com/Project/list_competitions.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Have a page where the user can see active competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the active competitions page list with a few active competitions</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182051350-73c1920e-4d76-4ca7-852e-01585f508cdb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>competitions list page on site<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the query including the WHERE clause</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182051473-9cd34031-d8d8-4db5-91e1-a3d5060b6fcc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>full where clause retrieving active competitions<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the query and the code used to display this data</td></tr>
<tr><td> <em>Response:</em> <p>First paginate counts all competitions that aren&#39;t paid out,&nbsp; aren&#39;t calculated, and where<br>the expiration date is greater than the current time. The query selects from<br>those same criteria and has a alias called joined that determines if the<br>user has joined already. It then appends all competitions the user is assigned<br>to.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/59">https://github.com/jordanNeo/IT202-451/pull/59</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (list competitions)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/list_competitions.php">https://jal88-prod.herokuapp.com/Project/list_competitions.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> CompetitionParticipants table </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the table with validate data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182051991-947dce29-4551-4a98-aad2-de3d6ff7a63b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>UserComps table with valid entries<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/59">https://github.com/jordanNeo/IT202-451/pull/59</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can join active competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of the CreditHistory table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182054808-8fe62d8a-2fca-49e7-a484-a52671e13732.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>credit history table with new user gaining one credit<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182054844-c16eff4e-d705-467c-9bb0-3fd9b301a1ac.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>credit history table after user spends credit on competition (records 50 and 51)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of the Competitions table showing the participant count update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182054902-7d5fbed2-36f6-43bf-8754-b35044ddd537.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>competitions table ( freeMonies with one participant)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182054908-9b0a0a48-88bc-483e-8da3-4aa2df7a5245.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>freeMonies with two participants<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot(s) showing proper error and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182055136-6a891c80-e619-4972-802e-f3cf19c94de0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>code snippet preventing a user from trying to register a comp they are<br>already in<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182058415-7c6e0fa7-a72d-463a-9430-feb0e2b4254c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>warning showing user they dont have enough credits<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182057863-ef63c41d-b1ec-401c-bd8c-b74634314af9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>successfully joined message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/59">https://github.com/jordanNeo/IT202-451/pull/59</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the logic/code for joining a competition and the involved steps</td></tr>
<tr><td> <em>Response:</em> <ol><br><li>The list_competitions.php file displays a page containing a list of all competitions<br>that are not closed . It has a alias for a boolean value<br>that tells whether or not the user is actively enrolled in a competition<br>already.<div>2. The php inside the html loops through the table rows and displays<br>there results with the cost associated with a button to join. If the<br>user is already enrolled the button is disabled.</div><div>3. The each form entry has<br>two hidden fields, one for the comp id and one for the cost<br>which are filled out for the user. On submission the server calls join_competition.</div><div>4.<br>join competition works much like add_to_competition&nbsp; but it does the work of deducting<br>the cost inside of it.</div><br></li><br></ol><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file (any join page)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/list_competitions.php">https://jal88-prod.herokuapp.com/Project/list_competitions.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Create a function to calculate winners </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the whole code process with the clear comments (ensure your ucid and date are shown)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182073138-bbd51f90-b57c-41c1-949b-01d164909107.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>calcwinners page 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182073221-ff00c46d-7bea-4d2c-86ce-b3e3e914139e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>calcwinners page 2<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182073238-a2564d61-bc56-48b7-8193-1c3d30eb90c6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>calcwinners page 3 <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Mention which winner calculation you chose (copy the text from the proposal for your choice)</td></tr>
<tr><td> <em>Response:</em> <p><span id="docs-internal-guid-279bbb16-7fff-1fe9-a349-8fcc2a08bd38"><span style="font-size: 11pt; font-family: Arial; background-color: transparent; font-weight: 700; font-variant-numeric: normal; font-variant-east-asian:<br>normal; vertical-align: baseline; white-space: pre-wrap;">Option 1: </span><span style="font-size: 11pt; font-family: Arial; background-color: transparent;<br>font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Scores are calculated by the sum<br>of the score from the Scores table where it was earned/created between Competition<br>start and Competition expires timestamps</span></span><br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add before and after screenshots of the Competitions table of valid and invalid competitions being successfully processed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182067585-a030ed32-731a-4563-bab1-2025d74fa8c9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>competitions table with a invalid compeition &quot;inval&quot; before payout (last record) and valid<br>competition video (1st record)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182067596-818e6f7a-4211-4a70-bfad-252c89c3a010.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>&quot;inval&quot; competition with did_calc set to 1 after admin paid out<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182070895-4a562c9e-ebf9-455d-9665-d229cc905893.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>video competition with paid_out set to 1 (first record)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182071008-edcc61db-78f7-4302-ba41-fcdda8da404c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>payout logs<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the calculation steps and payout process</td></tr>
<tr><td> <em>Response:</em> <ol><br><li>Calc_winners fetches the payout options name and id of the Competition<div>2.If the<br>query runs it assigns the columns fetched to variables and calculates the payout<br>for the winners.</div><div>3.It then calls get_top_scores_for_comp and sets the limit to three to<br>get the top three scorers.</div><div>4. it then loops through the top scorers gotten<br>from the function and uses the index to determine whether to payout 1st<br>2nd and 3rd place awards.</div><div>5. If its succesful it adds the competition to<br>a array called calced_comps.</div><div>6. it then closes the competitions in that array and<br>closes competitions past their expiration date that are invalid(not enough particpants).</div><br></li><br></ol><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/59">https://github.com/jordanNeo/IT202-451/pull/59</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182076507-5f50064a-cfc6-45cd-8044-c956883aacb9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>project board with first issues done<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182076513-dd477434-4111-4a2a-b2c9-0b50dc0f2060.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>project board with second issues done<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182076521-a38ec1a2-5aae-4047-8a30-f6445fe2234e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>project board with third issues done<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone-3-arcade-project/grade/jal88" target="_blank">Grading</a></td></tr></table>