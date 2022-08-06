<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Jordan Lee(jal88)</td></tr>
<tr><td> <em>Generated: </em> 8/6/2022 4:01:15 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone-4-arcade-project/grade/jal88" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone4 branch</li><li>Create a new markdown file called milestone4.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone4.md</li><li>Add/commit/push the changes to Milestone4</li><li>PR Milestone4 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes</li><li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182666680-2135beb7-c679-46f7-8b57-14039c8b63f9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing users table with updated visibility column<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182666693-131509f3-5ee7-47f0-a178-cd6d19ea0153.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>profile page with toggle visibility option<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182666712-db01cf7d-cf16-4d39-ae1b-7f40aabc15a9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>public profile view of a different profile<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/71">https://github.com/jordanNeo/IT202-451/pull/71</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/profile.php?id=7">https://jal88-prod.herokuapp.com/Project/profile.php?id=7</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>First a new field was added to the Users table called visibility.There is<br>a new form field on the profile page that acts as a boolean<br>value that is posted to the http header.&nbsp; And the value of the<br>boolean is set to visibility in the update query.<div>When clicking on a profile<br>link if the visibility is not toggled on the user will be redirected<br>back to the homepage.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Anywhere a username is display should link to the user's profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the home page scoreboards with the proper links</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182666727-1ee20cb2-94af-44df-a17f-c1f3dcdceacd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>home page with user profile links<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/71">https://github.com/jordanNeo/IT202-451/pull/71</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to the related pages on heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/home.php">https://jal88-prod.herokuapp.com/Project/home.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the logic behind generating this view</td></tr>
<tr><td> <em>Response:</em> <p>Each username is the inclusion of a partial user_profile which is just a<br>html link to the profile gotten by appending the user_id to the header.&nbsp;<br>Profile.php then gets the information it needs about the page using $_GET. If<br>the server detects the page belongs to the user currently on it options<br>to edit the profile will be shown accordingly.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Viewing an Active or Expired competition should show a related top 10 scoreboard </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing competition scoreboards</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182666743-aae3135b-d6bb-4ebc-8a06-910043367004.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>competition scoreboard view with links and eligible scores for competition<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/71">https://github.com/jordanNeo/IT202-451/pull/71</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to an active or expired competition</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/view_competition.php?id=7">https://jal88-prod.herokuapp.com/Project/view_competition.php?id=7</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>The server gets the competition id from the link and then uses that<br>to search for users in the users_competition table to retrieve all users that<br>are enrolled in the competition. In order to ensure only scores are taken<br>from when the user joined only scores that have a creation time that<br>is after the join date of the competition and before the expiration are<br>taken in the where clause. The query joins competitions, users, and user_competitions to<br>do this query.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to see their competition history (active and expired) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of competition history view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/183231846-3c7890a4-3d45-40ad-923c-6ca35a4664e0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>users competition history with pagination<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/72">https://github.com/jordanNeo/IT202-451/pull/72</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the related page on heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/my_competitions.php">https://jal88-prod.herokuapp.com/Project/my_competitions.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain the logic behind generating this view</td></tr>
<tr><td> <em>Response:</em> <p>Query selects all relevant fields from competitions in a join on competition and<br>user competitions and displays these fields. If the expiration date is less than<br>the current timestamp, expired is displayed. The user will only have a option<br>to view since these are the competitions they have already joined. Here expired<br>competitions are displayed at the top. In the final project they are displayed<br>at the end of the list.<div>Pagination</div><div>1. Pagination function queries for total results that<br>will be displayed and calculated the total pages by using the number of<br>results on each page. The query is updated on refresh and has a<br>offset on the limit, which is a parameter that relates to the page<br>number in the header to display the next &quot;x&quot; results taken from the<br>query. The page numbers are displayed by a partial&nbsp; that is included and<br>are links refresh the page and page header.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Add pagination to the Active Competitions view </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the active competitions</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/183231898-92f7d12b-c7df-4b90-bb66-389a7b55a617.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>active competitions page1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/183231900-dbb056da-bc45-4895-8161-782e56097cf9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>active competitions page2<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/72">https://github.com/jordanNeo/IT202-451/pull/72</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the Active Competitions page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/list_competitions.php">https://jal88-prod.herokuapp.com/Project/list_competitions.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> User's score history will include pagination </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the user's scores</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/183231959-e7e01e0f-0d32-493a-81e9-b5da40e9af7c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>profile scores page 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/183231963-2d4fb9bb-2b08-46a1-8a94-1d3aaef72802.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>profile scores page 7<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/72">https://github.com/jordanNeo/IT202-451/pull/72</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add url to user profile (might want to use a public profile)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/profile.php?id=1">https://jal88-prod.herokuapp.com/Project/profile.php?id=1</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User with the role of admin can edit non-paid out competitions </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot showing the list of competitions the admin can view along with the link to edit it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/183238384-84415e48-3e54-49df-bca8-bf95d866d880.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>list of all unpaid competitions with the link to view/edit<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the competition edit form</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/183238380-8fa1543a-98e8-4b23-8c03-60651190395f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>view page with competition edit form<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/183238609-c8d961bf-bc9f-4c41-8ea2-131ccce215e5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>competition edit form filled out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing related message of not being able to edit a competition that's been paid out</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/183238481-52908d6c-1c36-4e6c-81d8-2ab8bd992f07.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the edit competition form only displays when the user is a admin and<br>the competition has not been paid out yet<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add before and after screenshots of an edited competition (db view)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/183238787-cc29a497-0b54-4f5b-a302-09d60a656257.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>competition table before update(see record 6)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/183238795-7c57c8f2-9881-4dfb-a6cf-ff4d40b9a69a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>competition view after update (see record 6)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/73">https://github.com/jordanNeo/IT202-451/pull/73</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add link to the admin list page and a link to the edit competition edit page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-dev.herokuapp.com/Project/admin/update_comp.php">https://jal88-dev.herokuapp.com/Project/admin/update_comp.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-dev.herokuapp.com/Project/admin/view_competition.php?id=10">https://jal88-dev.herokuapp.com/Project/admin/view_competition.php?id=10</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>1.first the view page uses is admin and&nbsp; paid out variable assigned from<br>the paid_out field in the table to decide whether or not to display<br>the form needed to edit the competition.&nbsp;<div>2.If the competition can be edited the<br>form must be filled out with valid values or else a error mesage<br>will be flashed to the user.</div><div>3. On submission a update query runs with<br>parameters set from the form field values.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Game should be fully implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the message showing a score can't be generated when logged in</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/183239598-2f5d1723-48b7-480e-8a7f-1dc86f5246eb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>alert notifying user score cant be saved when not logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the game in progress</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/182670912-ab976dfb-18e8-4d28-a145-560f935523af.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of game mid-game<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the message showing score was saved if logged in (was recorded in milestone2)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/183239593-0ceec9c9-bd29-449c-84f7-446c998ba0c6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>alert showing user their score has been saved<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add link to home page with high score lists</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/home.php">https://jal88-prod.herokuapp.com/Project/home.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/57">https://github.com/jordanNeo/IT202-451/pull/57</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/50">https://github.com/jordanNeo/IT202-451/pull/50</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic used for showing the related messages</td></tr>
<tr><td> <em>Response:</em> <p>It is just a flash message if the api succeeds in making a<br>insert in the Scores table the message saying score is saved is sent.<br>if not the user is told they are not logged in.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/183240113-881b89a5-3bf0-485d-90d6-e05ece69cece.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>project board first set of issues<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/183240115-8b62e41f-06ca-4f4b-9750-c1a4e50214ee.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>project board second set of issues <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/183240123-d6a1fae1-2df2-4309-a97d-b916fb682a9f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>project board third set of issues<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone-4-arcade-project/grade/jal88" target="_blank">Grading</a></td></tr></table>