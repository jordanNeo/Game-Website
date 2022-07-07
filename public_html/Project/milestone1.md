<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Jordan Lee(jal88)</td></tr>
<tr><td> <em>Generated: </em> 7/7/2022 3:57:56 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone1-deliverable/grade/jal88" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177661320-c7d87388-05ce-4a38-8907-686eddd6e2d7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user logging in with invalid email<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177661858-868fc52f-51bd-46fe-94a2-579ccd9e1c62.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177667010-261089b7-268c-422b-a07e-521792c9526c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>passwords not matching<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177666818-dcd01261-a3a2-45a2-8f68-1fedd6cd0d92.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email is taken<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177666828-d985d3c4-fb6e-4d64-bdbe-67bec341774c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username is taken<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177667113-c9b652b0-9d15-49ab-9d0e-a5e3ace23707.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>form with valid data before submission<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177452675-4ca47eed-73ea-4201-bd85-a8fa7c847e08.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>users table with one email registered<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/28">https://github.com/jordanNeo/IT202-451/pull/28</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/12">https://github.com/jordanNeo/IT202-451/pull/12</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form uses the email and password/password validation fields as inputs in conjunction<br>with the post method to send the information to the server after it<br>is validated by client and server so all the fields are safe to<br>be submitted. If the user hasnt registered the server will hash the password&nbsp;<br>and store that along with the user in the database using a prepared<br>statement and the values stores as variables to prevent sql injections. If the<br>statement does not execute a custom error message will appear. If successful the<br>database will be updated with the new users information.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/f2c037/000000?text=Partial"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177454670-e53ab6ee-8198-416f-89db-b002474b2fb3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing a user logged in with confirmation<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/17">https://github.com/jordanNeo/IT202-451/pull/17</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form will make sure the user has inputted a safe email and<br>password ensuring the fields of the form are not to short, a actual<br>email, etc.. The client will try to validate and if that fails the<br>server will validate. the form will submit using the POST method to the<br>server and the server will then try and fetch the users information in<br>a sql statement using the username to match fields. if nothing is returned<br>a error will be thrown with a custom error message telling the user<br>the email is not found. If information is found the server will compare<br>the password hash with the value of the inputted password passed through the<br>password verify function. If the comparison is not true it will warn the<br>user that the passwords do not match.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177662287-c9851794-4583-4a46-b5fe-ca13caf73ede.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>browser showing the user is no longer logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177662296-3b82936e-ddb3-4a73-a47c-54814ec84034.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing profile page not available/ going to profile page redirects to login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/20">https://github.com/jordanNeo/IT202-451/pull/20</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/21">https://github.com/jordanNeo/IT202-451/pull/21</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/25">https://github.com/jordanNeo/IT202-451/pull/25</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>If the domain is local host the server will configure a session for<br>the files in the project path. The server will start the session. When<br>navigating if the session has a key called user and a key called<br>email associated with that user then it will know someone is logged it.<br>Otherwise it will notify the user they are not logged in. This is<br>utilized in the login page after a successful login the server will save<br>the user in its session information. After logging out the session is destroyed.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177662296-3b82936e-ddb3-4a73-a47c-54814ec84034.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user cannot access the profile page because not logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177662614-09da8d43-9e40-44f3-b494-b664e056f5b0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>regular user attempting to access admin pages<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177662883-758aaab7-04a3-4187-b39c-a738daee9fcf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>roles table with two roles<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177662897-6590060a-e404-4771-b057-4ef88faa02c6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>userroles table with one admin - &quot;<a href="mailto:&#106;&#x61;&#x6c;&#x38;&#x38;&#x40;&#x6e;&#106;&#105;&#x74;&#x2e;&#101;&#x64;&#117;">&#106;&#x61;&#x6c;&#x38;&#x38;&#x40;&#x6e;&#106;&#105;&#x74;&#x2e;&#101;&#x64;&#117;</a>&quot;<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/29">https://github.com/jordanNeo/IT202-451/pull/29</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Login protected pages have the function is_logged_in() at the start of the page&nbsp;<br>which checks if the session has a value for the user set. If<br>the session does not have a user logged in the client is redirected<br>to the login page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>For role-protected pages the function has_role() is used which is essentially the same<br>as is_logged_in but it checks if any f the user&#39;s roles in the<br>session is equal to the parameter(set to Admin in our case).<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177836585-ef9e4d4e-ef97-4f40-bd18-cb6f3ce8e2a9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>profile page on the site with my css applied<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/31">https://github.com/jordanNeo/IT202-451/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>Firstly, I changed the background color to black and the font color to<br>orange to make the colors go together. I updated the nav to have<br>a lighter background and a different/larger font than the rest of the page<br>using font-family and font-size.&nbsp; I also changed the error message colors to be<br>darker versions of themselves to go better with the black. Lastly I changed<br>the form border-radius to 15% to keep curves on the form but keep<br>it rectangular.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177665533-b3eff9dc-cfe3-4037-9f37-4a148768cbc2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>error showing a password is not found for a user<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177665534-fbd87538-1241-4053-a771-065b3a8cee7a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>error showing invalid input<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177665531-afdfabbb-c614-41b2-87aa-0393fc82e048.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>error showing no authorization to access<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/29">https://github.com/jordanNeo/IT202-451/pull/29</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>&nbsp;Any error message that could result in information leaking about the server is<br>replaced by a generic message telling the user what is the problem with<br>the actions that were taken.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177663124-1f4146ff-3529-4972-aeb6-e7b61617bcb7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user profile page with option to update<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/24">https://github.com/jordanNeo/IT202-451/pull/24</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>&nbsp;The page collects the current users email and username from the session variables.<br>The browser automatically&nbsp; fills out the email ad username values of the form<br>with the values taken from the session.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177833098-9545774a-fb42-4883-a227-57dad54bf98a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing username and email validation error messages<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177833220-309d8f7b-7a64-4fd6-b755-509cc7fb9de8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot showing password and confirm password messages<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177833323-f00ad793-a833-4847-bda4-558c31be587b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password mismatch error<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177834280-dd948582-49e8-49af-a509-32d0c5f46fe3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>ss showing email is already taken<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177834258-f5fb30b3-a9eb-418b-b064-029a77e07b19.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>ss showing usernane is already taken<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177834611-5d2a9892-8125-4e89-b9e3-1511def04635.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>table before update with user &quot;jal88&quot;<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177834598-76bf33be-5e21-4824-a286-f1cf1a9acc09.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>table after update with username &quot;jordanjordan&quot;<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/pull/31">https://github.com/jordanNeo/IT202-451/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>The page first checks the Users table in the database with the username<br>and email inputted into the fields by running a query to see if<br>either of them are in use already. The query will not run if<br>either of them are in use. Then the page will fetch the user<br>id and use that in a query to retrieve the new user&#39;s information<br>and update the session variables with those variables. if the password verify function<br>returns true with the current password the update function will run.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="http://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177860624-32e13f96-4fcc-4045-919c-b19f4ec622ce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>ss showing first three issues on project board<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177860658-3ba58e61-474d-4598-890a-d8d3a62fb637.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>second three issues<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/106134136/177860671-177e8672-a55e-4eb4-8a91-7811299c4fce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>third final three issues<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jordanNeo/IT202-451/projects/1">https://github.com/jordanNeo/IT202-451/projects/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jal88-prod.herokuapp.com/Project/login.php">https://jal88-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-451-M22/it202-milestone1-deliverable/grade/jal88" target="_blank">Grading</a></td></tr></table>