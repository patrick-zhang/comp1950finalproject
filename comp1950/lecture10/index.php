<!DOCTYPE html>
<html>
<head>
	<title>COMP 1950 - Lecture #10 - Methodology</title>

	<!-- stuff that's the same, maybe should be pulled in by script -->
	<meta charset="UTF-8">
	<!-- mild css reset -->
	<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
	<!-- main style sheet -->
	<link rel="stylesheet" type="text/css" href="../style.css" />
<!--
	<link rel="alternate stylesheet" href="../css/overhead.css" type="text/css" media="screen" title="Overhead" />
	<link rel="stylesheet" type="text/css" href="../css/print.css" media="print" />
-->
<!-- Uncompressed jquery -->
	<script
	  src="https://code.jquery.com/jquery-3.2.1.js"
	  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	  crossorigin="anonymous"></script>
	<script src="../script.js" charset="utf-8"></script>
</head>

<body>

<?php include '../inc/new-nav.inc' ?>

<div class="page-wrap">
	<header id="top">
		<h1 id="banner">British Columbia Institute of Technology</h1>
		<h2 id="titlebar">COMP 1950 - Intermediate Web Design and Development</h3>
	</header>
	<main><article>
		<h1>Lecture #10 - Methodology</h1>
		<div id='toc-here'></div>
		<section class="major-section">
			<h2>Housekeeping</h2>
			<section class="contblock">
			<h3>Agenda</h3>
				<ul>
					<li>Quiz #8</li>
					<li>final exam preparation</li>
					<li>collaborative frameworks</li>
					<li>methodology</li>
					<li>group project</li>
				</ul>
			</section>


			<section class="contblock">
			<h3>Final Exam Preparation</h3>
				<ul>
					<li>session #12 is the final exam</li>
					<li>a - written</li>
					<li>b - practical</li>
					<li>exam questions will be similar in format to written and practical quiz questioning</li>
				</ul>
			</section>
		</section>
		<section class="major-section">
			<h2>Version Control</h2>
			<section class="contblock">
			<h3>Collaborative Coding</h3>
				<p>Working with a team on a multiple file project presents several challenges to the developers: How will we ensure all team members have the latest copy of the codebase? How do we track what each team member has contributed to the project? Collaborative frameworks provide a mechanism for project management that is crucial for team based development.</p>
				<h4>Collaborative Workflow</h4>
				<ol>
					<li>a team member makes updates to <em>local</em> files</li>
					<li>after testing their work, they <em>commit</em> to the changes</li>
					<li>after committing the changes, local files are <em>synced</em> with <em>publicly</em> shared files</li>
					<li>publicly shared files are updated, and the updates are <em>propagated</em> to the <em>local</em> files of other team members</li>
				</ol>
			</section>

			<section class="contblock">
			<h3>What is Git?</h3>
				<ul>
					<li>a Git is a Version Control System (VCS). Open source, created by Linus Torvalds of Linux fame.</li>
					<li>it allows you to update, change, track all your changes to any code you are working on</li>
					<li>git is installed on your system (Win/Mac/Lin) and "watches" files and directories for changes</li>
					<li>A hidden directory (.git) is added to the location where you want your files tracked</li>
					<li>From then on, any changes to files in that directory or any sub-directory are tracked</li>
					<li>You can then keep versions of them within a repository</li>
					<li>A repository (or repo) is an area that tracks your files and any changes made to them</li>
					<li>You can make changes to a file, realize the changes caused a problem and "roll-back" those changes to an earlier version</li>
					<li>You can also share code with others without having to create login credentials for people on an FTP server</li>
					<li>Repos can be public or private, can be on local or remote systems and can be very large or very small (1 file)</li>
					<li>Version control is a great way to avoid having 15 versions of index.shtml (index.shtml.old, index.shtml.orig, index.shtml.do-not-delete, etc.)</li>
					<li>Beyond just having different versions of a file, you can actually SEE what has changed</li>
					<li>Some diff (seeing the changes - i.e. difference) applications are built into some Git management tools, others are standalone</li>
				</ul>
			</section>

			<section class="contblock">
			<h3>Where to use Git?</h3>
				<ul>
					<li>Git can be installed on almost any system (Win/Mac/Lin) as a client and the server is fairly well deployed as well. </li>
					<li>If you don't have access to a Git server, there are a few services that allow you to do the same. The most well-known, and used, is <a href="http://github.com/">GitHub</a>. </li>
					<li>For today, we will be creating a GitHub account, then installing the software an going over the basics.</li>
				</ul>
			</section>

			<section class="contblock">
			<h3>Create GitHub account</h3>
				<ul>
					<li>Sign up for a <a href="https://github.com/signup/free">free account on GitHub</a>. </li>
					<li>The process is very quick and gets you an account right away.</li>
					<li>Don't forget your account username: this will be a part of your public GIT URL, as well as required information when you want to join a group project on GIT.</li>
				</ul>
			</section>

			<section class="contblock">
			<h3>Install Git and GitHub GUI</h3>
				<ul>
					<li>While you can use the command line version of git, we are going to take a simpler introduction: using the GUI (Graphical User Interface). </li>
					<li>The process can take a while to install, so download the version appropriate for your system:
						<ul>
							<li><a href="http://github-windows.s3.amazonaws.com/GitHubSetup.exe">Download the Windows client</a>
							</li>
							<li><a href="https://central.github.com/mac/latest">Download the Mac client</a>
							</li>
						</ul>
					</li>
					<li>Each of these will install both the git client software (that watches all your files) as well as the GUI</li>
					<li>Depending on the speed of your system (and the admin rights allowed) it could take up to 10 minutes to get the software installed</li>
				</ul>
			</section>


			<section class="contblock">
			<h3>Create your own Repo</h3>
				<ul>
					<li>Once the software is up and running, you will be able to log into your newly created account</li>
					<li>The system will likely recognize you have no repositories created yet, and ask if you want to create one. </li>
					<li>Creating a repo in the GUI will do two things:
						<ul>
							<li><em>Remote:</em> Create a repository at GitHub that will house a copy of your files. </li>
							<li><em>Local:</em> Create a directory to hold files that you will edit and update locally.</li>
						</ul>
					</li>
					<li>The terms <em>Local</em> and <em>Remote</em> are very important. They refer to where the files sit physically, but also where the "master" is located: remotely.</li>
					<li>Give the new repo a <strong>Name</strong> (a file-friendly name: no spaces), <strong>Description</strong> and chose a <strong>Location</strong> on your system for the local files</li>
					<li>Make sure that "Push to GitHub" is selected and then click "Create"</li>
					<li>You've created a repo!</li>
				</ul>
			</section>


			<section class="contblock">
			<h3>Adding Files</h3>
				<ul>
					<li>From here on in, adding files is fairly easy. You can add them in Explorer/Finder and git will track which ones are new or have changed. Choose the <em>Changes</em> option to see GitHub's monitoring of the files you add and the changes you make.</li>
					<li>Once file(s) have been added, you can <em>commit</em> the file. This adds it to a <em>local staging</em> area, but it has not yet been <em>pushed</em> to GitHub.</li>
					<li>Back in the GitHub GUI, view the <em>changes</em> section.</li>
					<li>This shows all the files that have been changed or updated</li>
					<li>To ready your files to be <em>pushed</em> to GitHub, enter a <em>commit</em> summary message and (optionally) a more detailed description. Explain what and/or why you have changed the code, then click <strong>commit</strong>.</li>
					<li>Now your files are <em>committed</em> but still not <em>pushed</em>. </li>
					<li>At the top-right of the GitHib GUI, click on "publish" or "sync". This <em>pushes</em> all the <em>commits</em> to the <em>remote, public repo</em>.</li>
				</ul>
			</section>

			<section class="contblock">
			<h3>Reviewing changes</h3>
				<ul>
					<li>Your files should now be on <a href="https://github.com/">GitHub</a>. You can check by going back to your account and checking to see what repos are there, and what files are in that repo. </li>
					<li>There are a few ways to see changes - clicking on the time it was edited, or viewing the changed files through the GUI.</li>
					<li>You can also <em>edit</em> any of the text-based files right on GitHub, and then get the GUI to <em>pull</em> the changed back to your local machine.</li>
				</ul>
			</section>





			<section class="contblock">
			<h3>Collaborative code editing</h3>

				<h4>Clone a Repo</h4>
				<ul>
					<li>I have created a small repo (just 1 file) that is from our jQuery lecture, and I want to share it with all of you.</li>
					<li>The easiest way for you to do it is to search, browse or find the repo. Here is a link to it directly: <a href="https://github.com/comp1950github/jQuery_example">jQuery Code Example</a>
					</li>

					<li>Then choose Clone In Desktop (be sure your Git Client is running)</li>
					<li>This will bring down the repo file(s) to your client machine, allowing you to develop your own copy. Note: cloning a repo in this way does not allow you to contribute updates or changes to the master repo</li>
					<li>Learn more about <a href="https://help.github.com/desktop/guides/contributing/cloning-a-repository-from-github-to-github-desktop/">how to clone a repo</a>
					</li>
				</ul>

				<h4>Contributing to a Repo</h4>
				<fieldset>
					<legend>Repository Owner:</legend>
					<ul>
						<li>The owner of a repo can decide who, if anyone, is allowed to contribute to the code.</li>
						<li>Log in to the remote Github.com server</li>
						<li>Find and select the repo</li>
						<li>Choose <em>Settings</em>, then <em>Collaborators</em>
						</li>
						<li>Add the GitHub username of each individual to your collaborative team</li>
						<li>Learn more about <a href="https://help.github.com/desktop/guides/contributing/">how to contribute to a repo</a>
						</li>
					</ul>
				</fieldset>

				<!--

-->
				<h4>Branch A Project</h4>
				<fieldset>
					<legend>Repository Collaborator:</legend>
					<li>Before you can contribute to a project, you must be invited to be a contributor by the repository owner (described above). Log into GitHub.com and go to the notifications section (the bell icon at top right) to accept the invitation</li>
					<li>Choose "fork" from the top right of the GitHub.com page. This will create your own copy of the master files, associated with your account (note this branch of the repo is located at your account URL, not the repo owner's).</li>
					<li>Clone this forked repo as described above</li>
					<li>Add, edit, change the local files as needed</li>
					<li>Commit, and sync when satisfied with the stages of your development</li>
					<li>When your contributions are complete, choose to create a "Pull Request" in the Git Client. This will notify the owner of the repo that your code is ready to be reviewed and/or merged</li>
					<li>Some <a href="https://help.github.com/desktop/guides/contributing/creating-a-branch-for-your-work/">help with GitHub branching</a>
					</li>
				</fieldset>

			</section>


			<section class="contblock">
			<h3>Only the basics</h3>
				<ul>
					<li>We have only covered the mere basics of Git and GitHub today!</li>
					<li>There is a LOT more it can do and can save your bacon when you have your code committed and versioned properly</li>
					<li>Git takes much of the work out of keeping versions of your code, but it doesn't come easy</li>
					<li>Like any other technical skill it takes practice, discipline and commitment to keep it going.</li>
				</ul>
			</section>
		</section>

		<section class="major-section">
			<h2>Web Development Process</h2>
			<section class="contblock">
			<h3>Methodology: site planning overview</h3>
				<ul>
					<li><h5>define site objectives</h5> - what's the point? business goals? creative goals? (context)</li>
					<li><h5>define audience</h5> - who are they and what do they need? do they need to do things? buy things? learn something? all of the above? (users)</li>
					<li><h5>identify content requirements</h5> - what kind of "stuff" must be included to meet user needs? (content)</li>
					<li><h5>specify features</h5> - what must the site do (i.e., specific functionality) to meet user needs?</li>
					<li><h5>create information architecture</h5> - how will you structure the information space to allow quick and easy access to content and features?</li>
				</ul>
			</section>


			<section class="contblock">
			<h3>Web Development Methodology</h3>
				<h4>What is a Methodology?</h4>

				<p>
					An organized, documented set of procedures and guidelines for one or more phases of the web development life cycle, such as analysis or design. A step-by-step "cookbook" approach for carrying out the procedure; and an objective set of criteria for determining whether the results of the procedure are of acceptable quality. </p>

				<p>
					More than just Project Management, but it is derived from it.</p>

				<h4>Keys to remember</h4>
				<ul>
					<li>Many well-done projects will spend ~70% of your time planning!</li>
					<li>Let your clients know this!</li>

					<li>Results and "stuff to see" comes after considerable planning.</li>
				</ul>

				<h4>Why have a Methodology?</h4>

				<ul>
					<li><h5>Predictable: </h5> With a solid methodology, you have a predictable set of processes and tasks that you, your team, and your clients can rely on.</li>
					<li><h5>Trackable: </h5> Progress is trackable, as you can look at each process or task and mark how much has been completed.</li>
					<li><h5>Responsibility: </h5> Assigning responsibility to each line item will allow you to work co-operatively with the client to maintain steady progress.
					</li>
					<li><h5>Teamwork: </h5> If you are working with a team, it is much easier to move forward if you have everyone subscribing to the same methodology.</li>
				</ul>
			</section>

			<section class="contblock">
			<h3>What is your Methodology?</h3>
				<ul>
					<li>Every methodology is different - How do you put together your own web projects?</li>
					<li>What is your methodology?
						<ul>
							<li>How do you approach a project?</li>
							<li>Does it change depending on the size of the job?</li>
							<li>Do you have defined phases?</li>
							<li>What works well? What doesn't?</li>
							<li>Don't have a lot of experience with web development projects? How do you <strong>think</strong> it should work?</li>
						</ul>
					</li>
				</ul>
				<h4>Established Web Development Methodologies</h4>
				<ul>
					<li><a href="http://www.sitepoint.com/successful-development/">Sitepoint discusses methodology</a> for web developers</li>
					<li><a href="http://www.bostoncomputing.net/webdesign/methodology/">Boston computing </a> share their methodology</li>
					<li>Many companies have a unique methodology. Sometimes the scope of the project may lend itself to one or another methodology. </li>
					<li>There is no one correct methodology</li>
				</ul>

				<p>Generally, there are 5 accepted phases in Web Development Methodology. They are:
					<ul>
						<li>Phase 1: Definition</li>
						<li>Phase 2: Site Development</li>
						<li>Phase 3: Design </li>
						<li>Phase 4: Production &amp; Testing</li>
						<li>Phase 5: Launch</li>
					</ul>
					<p><strong>However</strong>, I have added 2 steps that I think are critical in selecting and maintaining successful projects:</p>
					<ul>
						<li>Phase 0: Client/Project Selection</li>
						<li>Phase 6: Epilogue and Maintenance</li>
					</ul>

			</section>


			<section class="contblock">
			<h3>Phase 0 - Client/Project Selection</h3>
				<p>
					If you want to start a project, it is important to know who your client is, who your team members will be, and what your chance of success is.</p>

				<p>
					<h4>Is every job worth taking? - Why or why not?</h4>

					<ul>
						<li>
							Bad clients can suck time (and money!) out of you.</li>

						<li>
							Make you work harder for the project</li>
						<li>
							Frequent changes, 'misunderstandings' or 'miscommunication' excuses which can lead to going back a step or two (or ten!)
						</li>
						<li>
							Good clients work like team members. They have responsibilities and they hold up their end of the 'bargain'.</li>
						<li>

							A lot of projects = Not much time to work on *any* project
						</li>
						<li>
							Working as a team member (consultant) on a job? Make sure you know the project leader, or get a CLEAR set of requirements for your services.</li>
						<li>
							Bad client can look bad on you.</li>
					</ul>

					<ul>
						<li><h5>

	Sometimes, you don't have an option! </h5> (Your client is your boss/employer)
						</li>
						<li>
							In this case, you need to be clear about what you can/cannot achieve early on, and be prepared to stick to your plan.</li>
						<li>
							Make sure you document as MUCH AS POSSIBLE!</li>
					</ul>

					<p class="warning">Bad Client Early Warning:</p>
					<ul>
						<li>
							Unrealistic schedules or desires. Wants the site up right away, or in short order</li>
						<li>
							Wants to get 'something to look at' before any planning, user testing/profiling, content aggregation or design is done
						</li>
						<li>
							Pretends to know how it is done, difficult to educate</li>

						<li>
							Compares your efforts to &quot;my neighbor's kid&quot; when it comes to budget time</li>
						<li>
							No idea what the content should be - They are the *owner* of it!</li>
						<li>
							Will not sign off, or give final approval for the project. Want to 'just get underway, worry about the details later'</li>

						<li>
							Indecisive, makes frequent changes.</li>
						<li>
							Finds initial discovery/client research to be troublesome or a waste of time.</li>
						<li>
							Slow decision maker, unresponsive to email requests</li>
						<li>

							Wants to take control of the creative, driving the site design, possibly throwing wrenches into the development. Many repercussions here!</li>
						<li>
							Doesn't get involved in the project at all. Want you to just come back with it all finished.</li>
					</ul>

					<p class="warning">Good Clients Early Warning:</p>
					<ul>
						<li>
							Very responsive to requests for information</li>

						<li>
							Sets realistic goals with realistic schedules</li>
						<li>
							Pulls their own weight during the project. Delivers on their tasks on time</li>
						<li>
							In agreement about schedules, deliverables and budget</li>
						<li>

							Decisive, decision-maker and signs off</li>
						<li>
							Is clear when building the scope, goals and application requirements</li>
					</ul>

					<p>
						If you see any of the Early Warnings, think to yourself: How much do I need this job?</p>

					<p>
						Sometimes it is better to find yourself a better account rather than suffer through a bad one.</p>

					<p>
						If your employer is your client, get into the habit of documenting everything you do, and everything that the project is expected to accomplish.</p>

					<p class="warning">Extremely Important!!!</p>
					<ul>
						<li>
							Establish the criteria for success</li>
						<li>
							Before the project starts, make sure you both know what constitutes a successful project</li>

						<li>
							Ensure that the client knows what Sign-Off means</li>
						<li>
							Use definitive language to describe the project success criteria:</li>
					</ul>
					<p>
						<h5>Good:</h5>
					</p>
					<ul>
						<li>Develop a Site Map to use as a basis for developing completed web site</li>

						<li>Design 3 user-interface templates, of which 1 will be approved for final use</li>
						<li>Rewrite content in the Introduction and Contact sections, to be signed off by the client.</li>
					</ul>


					<p>
						<h5>Bad: </h5>
					</p>
					<ul>
						<li>Redesign the site</li>
						<li>Develop a web application</li>

						<li>Update the look of the site</li>
					</ul>

					<p>
						Otherwise, the project might not ever end.</p>

					<p>So, with that optional step out of the way, there are some things to keep in mind before embarking on a project with a new client.</p>
			</section>


			<section class="contblock">
			<h3>Before Beginning</h3>
				<p>
					<h5>Questions for you and your
client</h5>
				</p>

				<ul>
					<li>
						Why are you putting this site up? If redesigning the site, then why? Just to 'update the look'?</li>
					<li>
						What are your customers telling you or your client? What kind of things do they want to see? No just on the web, but out of the company in general. Sometimes, these are the key issues facing a company's success.
					</li>
					<li>
						What is the competition doing? Are they winning over customers because of something they are doing that you aren't? Or doing it better?
					</li>
					<li>

						In the case of a redesign, make sure you include customers when you can. All of a sudden changing the site can cause problems.
					</li>
					<li><h5>
	Important:</h5> Design for CUSTOMERS, not executives. Too many times, sites get designed because of what the owner wants, and not what the customers need.
						<ul>
							<li>
								Show 'best practices' of other sites</li>
							<li>

								Explain that the site needs to be usable</li>
							<li>
								Support your assertions with user testing</li>
							<li>
								Have a plan of attack</li>
						</ul>
					</li>

				</ul>

				<h4 class="warning">Red Alerts</h4>
				<ul>
					<li><span class="warning">
	Content!</span> This is <em>almost always</em> the biggest roadblock in getting a project completed. Clients promise content, but don't deliver on time. </li>
					<li>

						Sometimes, the content they promise is nothing like the content they deliver.</li>
					<li>
						Worst of all: People think that Print Content = Web Content
						<ul>
							<li><h5>
		Strategies</h5>:
								<ul>
									<li>
										Engage them early on: What will be on the site? Exactly.
									</li>

									<li>
										If the site will have a lot of content, *especially* if there is no content already: suggest a writer for the content.</li>
									<li>
										Review content for 'readability'. Should a writer be suggested if the content is too technical, or brochure ware?</li>
									<li>
										Show them that Print Content and Web Content are different!
									</li>
									<li>


										<a href="http://www.useit.com/papers/webwriting/">
			http://www.useit.com/papers/webwriting/</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li><span class="warning">
	Sign-Off!</span> Don't get caught late in the project with &quot;But I thought you were going to do this&quot; or &quot;I don't like the way this looks/works/feels&quot;.
						<ul>

							<li><h5>
		Strategies</h5>:</li>
							<li>
								Identify a SINGLE PERSON who is responsible for signing off on all deliverables.</li>
							<li>
								If a Committee wants to be part of the process, that's okay, so long as they nominate ONE PERSON to be the chairperson with signing authority.
								<ul>
									<li>

										Make sure that you get your client to sign off:</li>
									<li>
										On the requirements</li>
									<li>
										On the project plan</li>
									<li>
										On the budget</li>

									<li>
										On the scope</li>
									<li>
										On each phase</li>
								</ul>
							</li>
							<li>
								This will protect you in the end, as you can go back to your last sign-off and explain that you had completed that step based on the requirements.</li>

						</ul>
					</li>
					<li><span class="warning">
	Scope Creep!</span> This is a slimy monster that can crawl all over your project plan and carve off all of your profit.
						<ul>
							<li><h5>
		Strategies</h5>:
								<ul>

									<li>
										Solid Requirements - This might seem like a picky process, but you need to make sure that you understand the depth to everything the customer is asking for. Ask lots of questions.</li>
									<li>
										Sign off - This is a powerful tool for not letting scope creep get too far</li>
									<li>
										Change Document - If your client wishes a change, give them the opportunity to change, but make sure they know that this is *ADDITIONAL WORK* and that they will be charged for it.</li>
									<li>

										Application Development details - Applications can be one of the most difficult to work with, because they can have many functional branches and changes can take a long time. Engage an engineer early on to develop a SOLID specification.</li>
									<li>
										Talk about it! If you mention it to your client at the beginning, you have identified a potential risk early in the project. Be prepared to mitigate potential scope creep later on my identifying it at the beginning.</li>
								</ul>
							</li>
						</ul>
					</li>
					<li><span class="warning">

	Miscommunication!</span> I have seen this happen on almost every project I have been involved in. Good clients or bad, you will get into a project and have the client say: &quot;That isn't right&quot;.
						<ul>
							<li><h5>
		Strategies</h5>
								<ul>
									<li>
										Frequent follow-up with more than just a phone call.</li>

									<li>
										Walk-through ideas, wireframes, layout, graphics, content and application details with sign-off person. </li>
									<li>
										Make sure you talk to the decision maker (otherwise, whomever you talk to will get it wrong when telling them - guaranteed!!)
									</li>
									<li>
										Clear Schedule and Scope documents</li>
								</ul>

							</li>
						</ul>
					</li>
				</ul>
				<p>

					<ul>
						<li><span class="warning">
	Missed Deliverables! </span> Because the client is a team member, they will undoubtedly have tasks to complete during the project. </li>

						<li>
							Occasionally, or often, they may miss these deadlines, which can impinge on the project, or stop it altogether!
							<ul>
								<li><h5>
		Strategies</h5>
									<ul>
										<li>
											Get them to agree to a schedule BEFORE the project starts!
										</li>

										<li>
											Build in some Flex-Time: set a deliverable date of October 1st, but you don't *need* the content until October 5th.</li>
										<li>
											Pleasant reminders: When creating the schedule, go back to your office and build a schedule of reminders that fall 1 - 3 days before the deliverable. Send out a 'Standard Project Update' with details of what has been done, what is happening now, and what is required in short order.</li>
										<li>
											Overdue reminders: These are less friendly, and more direct. A task is overdue, please attend to this.</li>
										<li>

											Very overdue: Phone the client and let them know that you have a dependency on the task. If they cannot get it done, let them know that the schedule will need to be altered to reflect the lost time.</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
			</section>


			<section class="contblock">
			<h3>Phase 1: Definition</h3>
				<h4>Gathering Information</h4>
				<ul>
					<li>
						Work with your client to gather as much information as you can about their company/product/promotion</li>
					<li>
						Get all materials that they have</li>
					<li>
						Ask questions, get people engaged in discussing the latent info
						<ul>

							<li>
								You might find that people differ on what they think the product/promotion actually is!</li>
						</ul>
					</li>
					<li>
						If a site already exists, look at current site and learn as much as you can about what is there now</li>
					<li><h5><em>
	Become an expert in your client's business!</em></h5>
					</li>

				</ul>

				<p>
					<h4>Client Questionnaire</h4>
					<p>One of the challenges of development for a client is determining the needs and wants that must be met, and those that might be optional. In the early stages of a project, have your client fill out a questionnaire to better understand where they are coming from.</p>

					<ul>
						<li>
							Get the client to fill out the questionnaire as much as they can.</li>
						<li>
							Do NOT do it with them! They might want your help, but RESIST!</li>
						<li>

							Give them a few days and come back to see how far it has gotten</li>
						<li>
							Most of the time, they only finish the 'stuff they know'
							<ul>
								<li>
									This serves to illustrate that YOU are the expert</li>
								<li>
									Help them fill out the rest</li>

								<li>
									Clarify the answers they gave you</li>
							</ul>
						</li>
					</ul>
					<h4>Web Development Questionnaires</h4>
					<ul>
						<li><a href="../downloads/project_questionnaire.doc">BCIT</a>
						</li>
						<li><a href="http://www.cemalekin.com/syllabus/wp-content/uploads/2010/02/WebClientInterview.pdf">MOTI client interview form</a>
						</li>
						<li><a href="http://www.evotech.net/blog/2009/04/22-web-client-ued-questions/">Estelle Weyl's</a>
						</li>
						<li>Find one that is sufficiently detailed and thorough, and consider modifing and/or supplementing it with questions of your own</li>

					</ul>


					<p>The questionnaire is not only useful to the developer(s), it helps the client to get a clearer understanding of what their needs are.</p>


					<p>
						<h5>Understanding Your
Audience</h5>
					</p>
					<ul>
						<li>

							Who is your client targeting?</li>
						<li>
							What ages are they? Gender? Ethnic group? Financial Status? Technical Savvy?</li>
						<li>
							More than one target group? Identify all of them</li>
						<li><h5>
	Personas (also called User Profiles or Use Cases) </h5>
						</li>

						<li>
							If site exists, look at what they are doing now</li>
					</ul>

					<p>
						<h5>Setting Goals</h5>
					</p>
					<ul>
						<li>
							Setting goals for the project sets up your initial Success Criteria</li>
						<li>

							Number one question is: Why build a website? / Why redesign a website?
							<ul>
								<li>
									Goals can be: </li>
								<li>
									Support current business with online presence</li>
								<li>
									Creating online resources for clients</li>

								<li>
									Opening online sales</li>
								<li>
									(existing) Increase traffic</li>
								<li>
									(existing) Improving purchasing conversion</li>
								<li>

									(existing) Improving usability</li>
							</ul>
						</li>
						<li>
							Engage the customer in these discussions. Make sure they have an understanding of what YOU see as the goals, and that you understand what THEY see as the goals. </li>
						<li>
							Work to join those together!</li>

					</ul>

					<h4>
Tool:
Creative Brief</h4>
					<ul>
						<li>
							A creative brief is simply a restating of the goals of the project, and a proposal for what you believe will be required to complete the project.
							<ul>
								<li>
									No Budget</li>
								<li>

									Refined Project Goals</li>
								<li>
									Audience identified</li>
								<li>
									Visual and conceptual goals stated, but not displayed</li>
								<li>
									GET IT SIGNED! </li>

							</ul>
						</li>
					</ul>

					<ul>
						<li>
							Once the client has had a chance to review the Brief, they may want to make some changes</li>
						<li>
							Keep the brief as it is, and add an attachment that is the ADDENDUM to the Creative Brief.</li>

						<li>
							Once everyone is happy with the corrected brief, then GET IT SIGNED!</li>
					</ul>

					<p>
						<h5>Project Team</h5>
					</p>
					<ul>
						<li>
							Who is the team? </li>
						<li>

							Are you assembling the team? Are you part of a larger team? Are you flying solo?</li>
						<li>
							Who does the client have on their team? What resources are they offering?</li>
						<li>
							Establish who is doing what, and a list of tasks/roles so that when unexpected events come up, there is no finger pointing.</li>
						<li>
							Will there be technical requirements?</li>

						<li>
							Remember, the client is ALWAYS a team member!</li>
					</ul>

					<p>
						<h5>Schedule</h5>
					</p>
					<ul>
						<li>
							Now that you know WHO is going to do WHAT, you need to determine WHEN are they going to do it.</li>
						<li>

							Are there critical launch factors?</li>
						<li>
							Are there critical milestone dates?</li>
						<li>
							Will decision makers be available? Vacation? Retiring?
						</li>
						<li>
							What are the availability levels of your team members?</li>

						<li>
							What is their workload?</li>
						<li>
							What are the dependencies of the project?</li>
						<li>
							Construct a list of tasks that will likely have to be done to complete this site. It can be rough at first.</li>
						<li>

							Next, mark each task with a likely person who will be responsible.
						</li>
						<li>
							Now try and put all the tasks in chronological order, making sure that the same person cannot be working on the two tasks simultaneously.
						</li>
						<li><h5>
	This is expert project management</h5> - Not covered in this course, but it can be a huge challenge!!</li>
					</ul>

					<p>
						<h5>Budget</h5>
					</p>
					<ul>
						<li>
							This is universally the most contentious part of a project.
						</li>
						<li>
							Make sure that you have defined who the project members are, their role, and their cost (by task or by hour).</li>
						<li>
							Now, with your total hours, and roles defined, just sum the total amount and use that as a guideline.</li>

						<li>
							Remember to add extra charges!! Stock Photo, Domain Registration, Hosting Fees (if applicable) software (if needed), etc.</li>
						<li>
							Include a breakdown of tasks, who is responsible, how many hours it will take and the total for each phase.</li>
					</ul>

					<p>
						<h5>Project Plan</h5>
					</p>
					<ul>
						<li>

							Next comes the Project plan</li>
						<li>
							You might spend a lot of time working on this, particularly if you are assembling a team or if the project is very large or lengthy
						</li>
						<li>
							Components of a Project Plan:
							<ul>
								<li><h5>
		Overview</h5>: The executive summary. What will be accomplished in broad strokes.</li>

								<li><h5>
		Schedule</h5>: This might be somewhat rough to begin with, but this will come out of conversations with the client and with the team. </li>
								<li>
									Schedule may also have some critical dates (like promotional campaign start, etc.) that need to be expressly identified.</li>
								<li>
									Talk to your client! Make sure that the dates are achievable  by YOU AND BY THEM!</li>
								<li><h5>

		Budget</h5>: Another area that may change during the review of the project. Be prepared to defend the budget</li>
								<li><h5>
		Audience: </h5> Placing this in the project plan is crucial, as this will become the main reference document throughout the project. Make sure that you include descriptions of the Personas</li>
								<li><h5>
		Testing Plan: </h5> Clearly identify what/how testing will occur, both on users and the site itself.</li>
								<li><h5>
		Details and Assumptions: </h5> Often overlooked, it is important to include as a clarifier. This is where all of the assumptions by the developer are outlined.
									<ul>
										<li>
											Examples:</li>
										<li>

											The development of (site A) is limited to HTML coding of X sections and Y pages (if known)</li>
										<li>
											The budget is only an estimate based on information given as of (date). Variance may occur with changes in the project plan. See Change Request Form in appendix B</li>
										<li>
											Overdue task delivery may be subject to extra charges outlined in appendix A</li>
										<li>
											Stock image and photo/illustration fees are the responsibility of the client. Approval for each item will be requested from the client before purchase.</li>

									</ul>
								</li>
								<li><h5>
		SIGNATURE LINE</h5>: This is MOST important! Make sure they sign this.</li>
							</ul>
						</li>
					</ul>

					<p>

						<h5>Kick it off!</h5>
					</p>
					<ul>
						<li>
							Once you have the project plan signed off, have a kick-off meeting/party</li>
						<li>
							Include *everyone* who will be part of the project</li>
						<li>
							Get them all together and let them know that the project has been approved, and is underway</li>

						<li>
							Ensure everyone knows they are working on a COMMON GOAL
						</li>
						<li>
							Give them a HORIZON: Launch Date, Milestones and/or Success Criteria</li>
					</ul>
			</section>


			<section class="contblock">
			<h3>Phase 2: Site Development</h3>
				<p>
					<h5>Review Existing Content</h5>
				</p>

				<ul>
					<li>
						What did you gather from the client?</li>
					<li>
						Remember Content is KING</li>
					<li>
						It isn't all just text:
						<ul>
							<li>

								Words, Images, Multimedia, diagrams, etc.</li>
						</ul>
					</li>
					<li>
						Is it web usable? Did you need to hire a writer?</li>
					<li>
						Get a sense of how the information is grouped together, and possibly do a pile-sorting exercise to see if it really is the most optimal way.</li>

					<li>
						If content is being provided by the client, create a schedule for content delivery, once you have outlined what needs to go on the site. </li>
					<li>
						Create an outline of content, so that client is forced to categorize what is there currently. Help them with this.</li>
					<li>
						Make sure the client KNOWS WHEN CONTENT IS DUE!</li>
				</ul>

				<p>
					<h5>Sitemapping</h5>
				</p>
				<ul>
					<li>
						Once you have the Content Outline, a navigation structure will usually emerge.</li>
					<li>
						Main categories start to arise as natural navigation points.
					</li>
					<li>
						This is a simple outline document that acts as a suggestion for further development. This is NOT the navigation</li>

					<li>
						With this in mind, does the initial navigation look correct? Is it simple to understand? Does it need a rework? Should the categories be re-assigned?</li>
				</ul>

				<p>
					<h5>Page View</h5>
				</p>
				<ul>
					<li>
						Once you have begun refining the content into an outline that can be used as a navigational aid, you can begin to look at Page level development.</li>
					<li>

						This generally comes from the information that is one or more levels deeper in the Content Categorization</li>
				</ul>

				<p>
					<h5>Wireframing</h5>
				</p>
				<ul>
					<li>
						One of the tools used for looking at a page is called Wireframing
					</li>
					<li>
						This allows you to outline what KIND of information will go on a page.</li>

					<li>
						Where navigation will fall, but not necessarily what the navigation will be.</li>
					<li>
						From multiple wireframes (one for each TYPE of page) you can start to derive FLOW</li>
					<li>
						TIP: Don't let clients see this early on. Inevitably, they will think this is a 'design' and get scared that the site is going to look like a bunch of dark lines on a white background!!</li>
					<li>Examine some <a href="http://www.wireframeshowcase.com/">website wireframes</a> to see how its done</li>
				</ul>

				<p>
					<h5>Labeling the site</h5>
				</p>
				<ul>
					<li>
						Labels are one of the key tenets of Information Architecture. </li>
					<li>
						Making sure that the site is labeled correctly is key to usability, searching and design</li>
					<li>
						Labels must be informative and give the user subtle instructions with few words</li>

					<li>
						Remember your audience! Labels can be sensitive to age, gender, ethnic background and more. Pull out your Personas to help you build these.</li>
					<li>
						TONE is also something that can be developed here. The site will have its own VOICE that communicates with the user. How the words flow together, how expressive or passive the site is. VERY IMPORTANT for some sites.
						<ul>
							<li>
								Example:</li>
							<li>

								Opera Site vs Professional Football site</li>
							<li>
								Skateboard retailer vs Alcohol Rehab Clinic</li>
							<li>
								Post-Secondary School Recruiting vs Course Homepage</li>
						</ul>
					</li>

				</ul>

				<p>
					<h5>Defining User Paths</h5>
				</p>
				<ul>
					<li>
						This is also sometimes overlooked!</li>
					<li>
						What is the site supposed to do?</li>
					<li>

						Will the user be required to follow a specific path?</li>
					<li>
						Has it been determined? Can they move from the site to the path and back with ease?
						<ul>
							<li>
								Examples:</li>
							<li>
								Bookstore Checkout Process</li>

							<li>
								Signing up for an account</li>
							<li>
								Selecting options for a travel package</li>
						</ul>
					</li>
					<li>
						Another use for those Personas!</li>

					<li>
						You can also extract User Scenarios from the profiles and use them as an additional document if you are building applications.</li>
					<li>
						Very useful for Interaction Designers.</li>
				</ul>
			</section>


			<section class="contblock">
			<h3>Phase 3: Design</h3>
				<p>
					<h5>Starting the Creative
Process</h5>
				</p>

				<ul>
					<li>
						For most people, this is the *fun* phase</li>
					<li>
						However, this is also the phase that has the most potential for client re-evaluation. </li>
					<li>
						Work to keep them on track! All your documentation will come in handy here.</li>
					<li>

						This is where Designers are engaged in the project.</li>
					<li><h5>
	First thing to do</h5>: Review the site goals with the client</li>
					<li>
						Use it as a re-confirmation that you are on the right track
					</li>
				</ul>

				<p>

					<h5>Brainstorming</h5>
				</p>
				<ul>
					<li>
						This is where you take all the information you have gathered and amalgamate it into what will eventually become the final design of the site.</li>
					<li>
						Visual Design begins with experiments using:
						<ul>
							<li>
								colour schemes</li>

							<li>
								layouts</li>
							<li>
								metaphors</li>
							<li>
								style</li>
						</ul>

					</li>
					<li>
						This can be done in several different ways:
						<ul>
							<li>
								Sketches</li>
							<li>
								Photoshop templates</li>

							<li>
								examples of other sites</li>
						</ul>
					</li>
					<li>
						Review the goals</li>
					<li>
						Look at the user scenarios and profiles</li>

					<li>
						Re-read the Questionnaire</li>
					<li>
						Use the Content Outline, Navigation, Page View documents
					</li>
					<li>
						Determine the consistencies, labels, navigation schemes
					</li>
				</ul>

				<p>
					<h5>Presenting designs to the
client</h5>
				</p>
				<ul>
					<li><h5>
	FIRST VISIT</h5>
					</li>
					<li>
						This is very tricky. Be AWARE that you can get caught up in some subjective commentary!</li>

					<li>
						BEFORE you present ANYTHING to the client, Set Expectations
						<ul>
							<li>
								Let them know that:</li>
							<li>
								the designs are PRELIMINARY</li>
							<li>

								things can be changed</li>
							<li>
								These are just IDEAS</li>
							<li>
								Colours and fonts are not set in stone (unless there is a corporate requirement)</li>
						</ul>
					</li>

					<li>
						Showing example templates MUST BE DONE IN THEIR PRESENCE!!!
					</li>
					<li>
						Also, let them know that this is just a basis for discussion, and a new design will be presented after this one is reviewed.</li>
					<li>
						Limit minutiae suggestions that bog down the presentations
					</li>
					<li>

						Try to keep it high level:
						<ul>
							<li>
								Does it answer the site goals (to look professional/lively/exciting), etc?</li>
							<li>
								Does the navigation make sense?</li>
							<li>
								What do you think you would see here (or there)?</li>

						</ul>
					</li>
					<li>
						Take copious notes (consider bringing a note taker with you)</li>
					<li>
						DO NOT try to correct the user on design issues alone. Just let them have their say and go back to your studio with notes</li>
				</ul>

				<ul>

					<li><h5>
	RETURN VISIT</h5>
					</li>
					<li>
						Make sure you answer the specific questions you had in the previous meeting</li>
					<li>
						Make sure you point out specific changes that were made based on specific suggestions. This is EXTREMELY IMPORTANT!
						<ul>
							<li>

								This reminds users why things have changed (i.e. it was their suggestion)</li>
							<li>
								If things were changed against the users wishes (because they asked for something ridiculous or out of scope), make sure you have a reason PREPARED BEFOREHAND!</li>
						</ul>
					</li>
					<li>
						Take more notes, let user make changes on paper</li>

				</ul>


				<ul>
					<li><h5>
	FINAL VISIT</h5>
					</li>
					<li>
						Other than little 'tweaks', make sure you get WRITTEN APPROVAL
					</li>
					<li>
						Bring colour printouts that the client can SIGN.</li>

					<li>
						Allow them to circle areas they want changed and make sure they INITIAL the change.</li>
				</ul>

				<p>
					<h5>Creating a protosite</h5>
				</p>
				<ul>
					<li>
						Many different designers do this many different ways</li>
					<li>

						Here is what I like to do:
						<ul>
							<li>
								With a visual designer, create the main templates for the site (however many there are)</li>
							<li>
								MAKE SURE you have a coder on-hand that can guide the process and say whether all design elements are possible!</li>
							<li>
								Home Page / Content Page / Application Page / Search and Results Pages / etc</li>

							<li>
								Create a near-final version with navigation, images, media and everything EXCEPT copy.</li>
							<li>
								DO NOT ADD COPY YET! If you are doing this in, say, photoshop, editing content isn't easy and can be arduous.</li>
							<li>
								Just use Lorem ipsum dolor text. Users might object, but explain that this removes them from trying to READ everything. Allows them to focus on the SITE.</li>
							<li>

								Create image maps for navigation. Allow users to click-through to test out flow, user paths, different looks, search results and more.</li>
							<li>
								Send link to user to have them test it.</li>
							<li>
								Go to see client after they have had a chance to &quot;test&quot; it.</li>
							<li>

								Gather feedback, take them through a &quot;professional&quot; walkthrough
							</li>
						</ul>
					</li>
				</ul>
				<p>
					<br>
					<h5>Create final templates</h5>
				</p>
				<ul>
					<li>

						Using the feedback gathered from the client, you can now engage your designer to create the final templates for the site.</li>
					<li>
						Make sure that you have consulted your coders to make sure that the templates are &quot;doable&quot; early on!</li>
					<li>
						These templates need to be finalized and locked down. They should be changed VERY LITTLE after this point, as they will be used as reference materials for post-launch maintenance.</li>
				</ul>

				<ul>
					<li><h5>
	Style Guide and Standards</h5>
					</li>
					<li>
						Create a STYLE GUIDE for your team, the client team and the Maintenance team
						<ul>
							<li>
								This will include:
								<ul>

									<li>
										Filename standards</li>
									<li>
										directory standards (are things page or directory based)
									</li>
									<li>
										Image standards (jpg, png, gif transparencies compression max size)</li>
									<li>

										Colours (what HEX#, etc.)</li>
									<li>
										Any other things required by the client</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>

						Establishing Standards for XHTML, CSS, mySQL, coding style, notations, META information, </li>
					<li>
						Crucial for Designers, developers, clients and project people.
					</li>
				</ul>
			</section>


			<section class="contblock">
			<h3>Phase 4: Production and Testing</h3>
				<ul>
					<li>
						This is the GET IT DONE phase</li>

					<li>
						Take everything you have planned and put it all together.
					</li>
					<li>
						This is where the coders, application developers, designers and client all work together.</li>
				</ul>

				<ul>
					<li><h5>
	Preproduction Review</h5>
					</li>

					<li>
						Review Goals AGAIN</li>
					<li>
						Review SCOPE (Details and Assumptions) - Are you on track? Has there been Scope Creep?</li>
					<li>
						Before heavy coding begins, make sure that coders understand the Audience capabilities and technical restraints (most users are T1 or 56K modem? Handheld?)</li>
				</ul>

				<p>
					<h5>Tracking Progress</h5>
				</p>
				<ul>
					<li>
						Have a system for tracking the progress of the project.
					</li>
					<li>
						Break down all the tasks into individual line items (use the schedule or Task List as a guide)</li>
					<li>
						Make sure every task is assigned with a person and due date.
					</li>

					<li>
						Request updates from all team members on a regular basis
						<ul>
							<li>
								Depends on length of job. 1 week? bi-weekly?</li>
							<li>
								Don't go too long without an update</li>
						</ul>

					</li>
					<li>
						If items are slipping, find out why and re-allocate resources based on requirements to complete a task</li>
					<li>
						If working by the hour, be VERY CONSCIOUS of 'just one little thing' requests from client.</li>
					<li>
						Build in a contingency for small changes, but remind client they will have to use the Change Request Document for larger changes.
						<ul>

							<li>
								If there is a problem, go back to all of the documentation that has client sign-off. Make sure they KNOW that they signed off on X and now they want either X+1 or Y.</li>
						</ul>
					</li>
				</ul>

				<p>
					<h5>Production</h5>
				</p>
				<ul>
					<li>

						Set the file structure for the final site</li>
					<li>
						This should be based on the wireframes and architecture that was developed in Phase 2</li>
					<li>
						Make sure this is a Scaleable design
						<ul>
							<li>
								Make sure that if the site grows (more products/sections, etc.) the site can grow with it</li>

						</ul>
					</li>
					<li>
						Coding pages based on the templates established in Phase 3</li>
					<li>
						CONSTANT REVIEW - Make sure that everything is progressing normally and that there are no 'surprises' during production
						<ul>
							<li>
								Nothing worse than a coder who misinterprets a design cog into something that throws the site out of whack</li>

							<li>
								Review progress during task updates</li>
						</ul>
					</li>
					<li>
						Backend integration
						<ul>
							<li>
								If actual visual integration can't come at this point, view the information flow</li>

							<li>
								If information flow is limited, then allow the application developers to create a mini-site that lets you see how things are progressing</li>
							<li>
								Lend coding resources to this mini-project</li>
							<li>
								EXPLAIN THIS TO CLIENT and BUILD IT INTO PROJECT!</li>
						</ul>

					</li>
				</ul>

				<p>
					<h5>Testing</h5>
				</p>
				<ul>
					<li>
						Perhaps the MOST overlooked part of the project</li>
					<li>
						This need to be organized and planned right from the beginning
					</li>

					<li>
						Some clients will object, saying that 'You shouldn't have to test it - it should work fine the first time'.
						<ul>
							<li class="warning">
								This is another red flag. Educate client</li>
						</ul>
					</li>
					<li>
						Start from the very beginning and review the goals, the content outline, applications specification everything.</li>

					<li>
						If there are user paths, these are an EXCELLENT place to start.</li>
				</ul>

				<h4>
The basics of Quality Assurance (QA) Testing</h4>
				<ul>
					<li><strong>Create a QA Plan</strong>:
						<ul>
							<li>From your Phase 1 documentation, determine what the most important areas of the site are meant to be. Use those requirements to build scenarios that are likely for users coming to the site.</li>
							<li>Another important tool is using the Personas you built earlier. Use these to determine what people are likely to want from the site.</li>

							<li>Review any user surveys, usability reports or focus group reports to determine what areas to test.</li>
							<li>Start with the meta-level items such as site-wide navigation, headers and footers, and focus on more granular items as you continue.</li>
						</ul>
					</li>
				</ul>

				<h4>Levels of QA Testing</h4>
				<p>Your client may only be interested in the most basic levels of QA testing. Be sure that they understand what the consequences of skipping/skimping on testing are!</p>

				<p>Having stated that, there are levels of testing you can do to satisfy your client (and yourself!):

					<ul>
						<li><strong>Light/Informal QA</strong>: This can be done as a checklist of features, tools and pages within the site. Using the Content Inventory to check off that each page is present, and any requirements documents to check the presence and function of tools and features.</li>

						<li><strong>Semiformal QA</strong>: This is a more organized approach that includes a checklist of items at the very least. Start by breaking down the testing into distinct groups: Content, Features and Applications. Each group is tested individually from a users point-of-view by following paths or tasks. A number of scenarios are defined based on the requirements for the system and followed. Errors and omissions should be noted and submitted for correction. <span class="warning">Note</span>: This is what most project managers will use.</li>
						<li><strong>Formal QA</strong>: This takes the previous level and adds a lot of documentation and, potentially, software to the process. Each task and subtask are mapped out, and each path of tasks/subtasks/subsubtasks are tested. Each test is accompanied by a notation of expected behaviour and experienced behaviour. Bugs are submitted and tracked with a process, likely using software like <a href="http://www.bugtrack.net/">BugTrack</a>.</li>
					</ul>


					<h4>
Prioritizing and fixing bugs</h4>

					<p>For most projects, the bugs will arise during early in the development phase, but some squeak through into the later phases and can slow a project <strong>way down</strong>.

						<p>In some cases it might be better to delay the launch of a site to fix a critical bug than it is to go live with a &quot;Show Stopper&quot;.</p>

						<p>If the launch date is solid and cannot be changed, consider moving resources to the problem area to reach resolution faster.</p>

						<p><span class="warning">Tip</span>: Fix the visual issues as early as possible. These are the ones the client will &quot;see&quot;.</p>

						<p>It is important to document major deficiencies so that you have a record of them existing. Mark them with the following:
							<ul>
								<li>Time &amp; Date</li>
								<li>Description of the error or omission</li>
								<li>What you did to achieve the issue (if applicable)</li>
								<li>Severity Level (try to keep this simple: 3 levels is fine)</li>
								<li>Status (Unconfirmed, Open, In Progress, Fixed)</li>

							</ul>
						</p>

						<h4>
Conducting a final check</h4>

						<p>Once the site has been checked through QA, make sure that you run through a final check on a staging server. All conditions and scripts should be &quot;real-world&quot; instead of development/test data. This can be done easily by getting everyone from the client and development sides to hammer the site for a day or two, just trying out the site.</p>

						<p>This has an added benefit of giving the client a way to experience the site as a user would, preparing them for any questions that might arise when the site launches.</p>
			</section>


			<section class="contblock">
			<h3>Phase 5: Launch</h3>
				<p>
					Handing off the site to the client. This section is generally straightforward. The site has been tested and should be ready for prime time.</p>

				<h4>Tasks to be completed at this phase:</h4>

				<ul>
					<li>Creating the Handoff Packet</li>
					<li>CMS Client Training</li>
					<li>Tracking Documentation</li>
					<li>Conducting a Postmortem meeting</li>
					<li>Scheduling Maintenance Training</li>
				</ul>

				<h4>
Going Live</h4>
				<ul>
					<li>Preparing an Announcement Plan</li>
					<li>Launching the site</li>
				</ul>
			</section>

			<section class="contblock">
			<h3>Phase 6: Epilogue - Maintaining the Site</h3>

				<p>Use web analytics to track the success of your site(s): <a href="http://www.uxbooth.com/blog/complete-beginners-guide-to-web-analytics-and-measurement/">Guide to Web Analytics and Measurement</a>
				</p>
				<ul>
					<li>how many visitors arrive at your website</li>
					<li>where people are coming from</li>
					<li>what search terms they used to find us</li>
					<li>what search terms they use on our site</li>
					<li>how long they stay on our site</li>
					<li>how quickly they leave</li>
					<li>what paths they're taking through our site</li>
					<li>whether our ad campaigns are working</li>
					<li>...and so on</li>
					</li>
				</ul>
			</section>




			<section class="contblock">
			<h3>Keys to Success</h3>
				<h4>
Spend lots of time
discovering, defining, planning, clarifying.</h4>
				<p>
					It will help when it comes to Production.
				</p>

				<h4>
One Decision Maker</h4>
				<p>
					Make sure you get ONE decision maker if at all possible. If you have a team or committee, get them to nominate a single contact person</p>

				<h4>
Get it in writing!</h4>

				<p>
					Make sure you have your primary decision maker physically signs off on each deliverable when they are satisfied.
				</p>

				<h4>
Track Your Progress</h4>
				<p>
					Use a calendar, project management software, task list, whatever, but track your progress!</p>

				<h4>
Content is King!</h4>
				<p>
					Fancy layouts and cutting edge design matter for only the smallest percentage of sites. The rest require compelling content. Don't let your client drive you to the bleeding edge.</p>

			</section>


			<section class="contblock">
			<h3>Working as a Team</h3>
				<p>A developer rarely works in a vacuum. Acting as a part of a team requires several non-technical skills. Effective teams communicate well and keep each member engaged and active.</p>
				<ul>
					<li>assess the skillset of each team member
						<ul>
							<li>who has design skills?</li>
							<li>who is a proficient coder / scripter?</li>
							<li>who is a strong communicator?</li>
							<li>does anyone have team management experience?</li>
							<li>show examples of each other's work</li>
						</ul>
					</li>
					<li>identify the kind of tasks that must have the group present to complete, and the ones that could be done individually</li>
					<li>identify which tasks depend on other tasks being completed first</li>
					<li>sometimes a group environment requires a member to delegate a task they might otherwise prefer to do themselves</li>
					<li>devise a system for team collaboration (meet in classroom, coffee shop, online, etc.)</li>
					<li>split up the work</li>
					<li>encourage, challenge, impress your teammates by contributing your best efforts</li>
				</ul>

			</section>
		</section>
		<section class="major-section">
			<h2>Find team for final project</h2>
			<section class="contblock">
			<h3>Exercise</h3>
				<ul>
					<li>Mingle with your classmates to see examples of each other's work</li>
					<li>Interview each other to assess skill sets</li>
					<li>Be prepared to form a project group (two or three students per group)</li>
				</ul>

			</section>


			<section class="contblock">
			<h3>Homework</h3>
				<ul>
					<li>due by midnight tonight</li>

					<li><a href="/_shared_resources_1950/downloads/comp1950_homework09.pdf">download the homework</a>
					</li>
					<li>no more quizzes!!!</li>
				</ul>
			</section>
		</section>
	</article></main>

	<!-- footer -->
	<footer id="footer">
		<a href="#top">Top of Page</a> | <a href="../">Home</a>
	</footer>

</div><!-- div.page-wrap -->
</body>
</html>
