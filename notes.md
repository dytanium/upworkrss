# About
This app is intended to crawl various Upwork RSS feed URLs, index the results, and allow a user to view or delete the job postings.

# Features
- Login/Logout
- Tailwind with extracted blade components
- One or more feed URLs per account
- Each feed URL can be checked at a certain interval (to start, every 2 minutes)
- Feed results are entered into the DB. Pull whatever data it can and save that too
- Must be able to archive/delete a job posting
- Must be able to search job postings - depending on what is in the RSS data
- Certain keywords can be 'pinned' to the top of the results page (ie: Laravel jobs)
- Bulk editing for deleting job postings
- Opposite of 'pinned' jobs - jobs that contain certain unwanted keywords (WordPress) that are shown at the bottom
- The results page is the dashboard - style it after the Livewire Surge app

# Future
- Parse the RSS feed URLs and see what we can gleam, so perhaps make your own filterable feed URL feature (like Livewire surge app)
- Potential crawling of actual jobs - see where the job is from, how much, etc

# Migrations
- Users table (Standard)
- Feeds (id, url)
- Pulls (id, feed_id, new_jobs, pulled_at) (this is ran each time the feed url is checked - i dont like the term 'pulls')
- listings (or jobs) (id, feed_id, url, status (new, archived, open), title?, keywords?, etc etc) figure out what 'new' represents - is there a date column in the rss data? how to set the pinned/unpinned status?
- proposals : for frequently used proposals. for now, just a 'title' and a 'proposal' fields

## Examples
https://www.upwork.com/ab/feed/jobs/rss?budget=10000-&sort=recency&job_type=fixed&user_location_match=1&paging=0%3B10&api_params=1&q=&securityToken=6611588803d794a62d5abc21631b8596cc1e3f4f80209f4bd0d23360bbb9198d54f92360f31a675fe9cd9d9dcd1d748526f5e8a06a9e18e27e9980e75ff3f1f2&userUid=424146853478907904&orgUid=424146853487296513

https://www.upwork.com/ab/feed/jobs/rss?q=Laravel&budget=500-999%2C1000-4999%2C5000-&job_type=hourly%2Cfixed&user_location_match=1&sort=recency&paging=0%3B10&api_params=1&securityToken=6611588803d794a62d5abc21631b8596cc1e3f4f80209f4bd0d23360bbb9198d54f92360f31a675fe9cd9d9dcd1d748526f5e8a06a9e18e27e9980e75ff3f1f2&userUid=424146853478907904&orgUid=424146853487296513


<?xml version="1.0" encoding="UTF-8"?><rss xmlns:content="http://purl.org/rss/1.0/modules/content/" version="2.0"><channel><title><![CDATA[All jobs | upwork.com]]></title><link><![CDATA[https://www.upwork.com/ab/feed/jobs/rss?api_params=1&amp;budget=10000-&amp;job_type=fixed&amp;orgUid=424146853487296513&amp;paging=0%3B10&amp;q=&amp;securityToken=6611588803d794a62d5abc21631b8596cc1e3f4f80209f4bd0d23360bbb9198d54f92360f31a675fe9cd9d9dcd1d748526f5e8a06a9e18e27e9980e75ff3f1f2&amp;sort=recency&amp;userUid=424146853478907904&amp;user_location_match=1]]></link><description><![CDATA[All jobs as of September 01, 2021 04:02 UTC]]></description><language>en-us</language><pubDate>Wed, 01 Sep 2021 04:02:41 +0000</pubDate><copyright>Â© 2003-2021 Upwork Corporation</copyright><docs>http://blogs.law.harvard.edu/tech/rss</docs><generator>Upwork Corporation</generator><managingEditor>rss@upwork.com (Upwork Corporation)</managingEditor><image><url>https://www.upwork.com/images/rss_logo.png</url><title><![CDATA[All jobs | upwork.com]]></title><link><![CDATA[https://www.upwork.com/ab/feed/jobs/rss?api_params=1&amp;budget=10000-&amp;job_type=fixed&amp;orgUid=424146853487296513&amp;paging=0%3B10&amp;q=&amp;securityToken=6611588803d794a62d5abc21631b8596cc1e3f4f80209f4bd0d23360bbb9198d54f92360f31a675fe9cd9d9dcd1d748526f5e8a06a9e18e27e9980e75ff3f1f2&amp;sort=recency&amp;userUid=424146853478907904&amp;user_location_match=1]]></link></image><item><title><![CDATA[Amazing Remote Opportunity with Unlimited Potentials - Upwork]]></title><link>https://www.upwork.com/jobs/Amazing-Remote-Opportunity-with-Unlimited-Potentials_%7E0153de68ede74ffe94?source=rss</link><description><![CDATA[We&rsquo;re seeking a qualified sales representative to help us sell advertisement services. The sales representative will have a strong understanding of the sales process, excelling at generating leads, building relationships, and closing deals. The ideal candidate will be a quick learner with strong negotiating skills, and the ability to showcase our offerings in a compelling way. Often tasked with giving presentations, it&rsquo;s essential that our sales rep be personable and professional.<br /><br />
Objectives of this Role<br />
- Meet weekly, monthly, and annual sales quotas through the successful implementation of sales and marketing strategies and tactics<br />
- Generate leads and build relationships planning and organizing daily work schedule to call on existing or potential sales outlets<br />
- Develop and implement territory action plan through comprehensive data analysis, and adjust sales techniques based on interactions and results in the field<br /><br />
Daily and Monthly Responsibilities<br />
- Maintain working relationships with existing clients to ensure exceptional service and identification of potential new sales opportunities<br />
- Identify appropriate prospects, set appointments, make effective qualifying sales calls, and manage sales cycle to close new business in all service categories offered<br />
- Possess in-depth product knowledge and be able to conduct demos and relay objection handling<br />
- Prepare professional, complete, concise and accurate reports, proposals, booking packages, and other documentation as required for executive-level presentations<br />
- Achieve sales goals by assessing current client needs and following an defined selling process with potential buyers, often utilizing product demos and presentations<br />
- Coordinate with other sales reps to ensure company quotas and standards are being met, performing market research and regular competitor monitoring<br /><br />
Skills and Qualifications<br />
- 1-3 years in sales within a advertisement setting<br />
- Excellent communication, interpersonal, problem-solving, presentation, and organizational skills<br />
- Proficiency with sales management software and CRM<br />
- Personal integrity<br /><br />
Preferred Qualifications<br />
- Proven success rate at levels above quotas<br />
- Ability to balance persuasion with professionalism<br />
- Strong organizational skills<br /><br /><b>Budget</b>: $10,000
<br /><b>Posted On</b>: September 01, 2021 03:43 UTC<br /><b>Category</b>: Sales &amp; Business Development<br /><b>Skills</b>:HubSpot,     Cold Calling,     Data Entry,     Telephone Handling,     Sales,     Appointment Setting
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Amazing-Remote-Opportunity-with-Unlimited-Potentials_%7E0153de68ede74ffe94?source=rss">click to apply</a>
]]></description><content:encoded><![CDATA[We&rsquo;re seeking a qualified sales representative to help us sell advertisement services. The sales representative will have a strong understanding of the sales process, excelling at generating leads, building relationships, and closing deals. The ideal candidate will be a quick learner with strong negotiating skills, and the ability to showcase our offerings in a compelling way. Often tasked with giving presentations, it&rsquo;s essential that our sales rep be personable and professional.<br /><br />
Objectives of this Role<br />
- Meet weekly, monthly, and annual sales quotas through the successful implementation of sales and marketing strategies and tactics<br />
- Generate leads and build relationships planning and organizing daily work schedule to call on existing or potential sales outlets<br />
- Develop and implement territory action plan through comprehensive data analysis, and adjust sales techniques based on interactions and results in the field<br /><br />
Daily and Monthly Responsibilities<br />
- Maintain working relationships with existing clients to ensure exceptional service and identification of potential new sales opportunities<br />
- Identify appropriate prospects, set appointments, make effective qualifying sales calls, and manage sales cycle to close new business in all service categories offered<br />
- Possess in-depth product knowledge and be able to conduct demos and relay objection handling<br />
- Prepare professional, complete, concise and accurate reports, proposals, booking packages, and other documentation as required for executive-level presentations<br />
- Achieve sales goals by assessing current client needs and following an defined selling process with potential buyers, often utilizing product demos and presentations<br />
- Coordinate with other sales reps to ensure company quotas and standards are being met, performing market research and regular competitor monitoring<br /><br />
Skills and Qualifications<br />
- 1-3 years in sales within a advertisement setting<br />
- Excellent communication, interpersonal, problem-solving, presentation, and organizational skills<br />
- Proficiency with sales management software and CRM<br />
- Personal integrity<br /><br />
Preferred Qualifications<br />
- Proven success rate at levels above quotas<br />
- Ability to balance persuasion with professionalism<br />
- Strong organizational skills<br /><br /><b>Budget</b>: $10,000
<br /><b>Posted On</b>: September 01, 2021 03:43 UTC<br /><b>Category</b>: Sales &amp; Business Development<br /><b>Skills</b>:HubSpot,     Cold Calling,     Data Entry,     Telephone Handling,     Sales,     Appointment Setting
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Amazing-Remote-Opportunity-with-Unlimited-Potentials_%7E0153de68ede74ffe94?source=rss">click to apply</a>
]]></content:encoded><pubDate>Wed, 01 Sep 2021 03:43:54 +0000</pubDate><guid>https://www.upwork.com/jobs/Amazing-Remote-Opportunity-with-Unlimited-Potentials_%7E0153de68ede74ffe94?source=rss</guid></item><item><title><![CDATA[Create a marketplace where multiple sellers can send product feeds to the site multiple times a day. - Upwork]]></title><link>https://www.upwork.com/jobs/Create-marketplace-where-multiple-sellers-can-send-product-feeds-the-site-multiple-times-day_%7E017bf2331fdb203e12?source=rss</link><description><![CDATA[Looking to create a marketplace site that will have many dealers that sell there products on.&nbsp;&nbsp;Customers will click a link for the item they want and it will bring the consumer to the dealers web page for that item. Will need multiple place to sell advertising on as well. Will need to make a dealer interface where dealers can send a feed file that will update stock and pricing for customers to see on the frontend of the site. A site similar to what I&#039;m looking for is https://gun.deals/&nbsp;&nbsp;Once this project is finished, I would like to have another built for the Archery industry as well as some other industries that I&#039;m targeting. <br /><br /><b>Budget</b>: $10,000
<br /><b>Posted On</b>: August 31, 2021 21:52 UTC<br /><b>Category</b>: Full Stack Development<br /><b>Skills</b>:Website Development,     HTML,     API Integration
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Create-marketplace-where-multiple-sellers-can-send-product-feeds-the-site-multiple-times-day_%7E017bf2331fdb203e12?source=rss">click to apply</a>
]]></description><content:encoded><![CDATA[Looking to create a marketplace site that will have many dealers that sell there products on.&nbsp;&nbsp;Customers will click a link for the item they want and it will bring the consumer to the dealers web page for that item. Will need multiple place to sell advertising on as well. Will need to make a dealer interface where dealers can send a feed file that will update stock and pricing for customers to see on the frontend of the site. A site similar to what I&#039;m looking for is https://gun.deals/&nbsp;&nbsp;Once this project is finished, I would like to have another built for the Archery industry as well as some other industries that I&#039;m targeting. <br /><br /><b>Budget</b>: $10,000
<br /><b>Posted On</b>: August 31, 2021 21:52 UTC<br /><b>Category</b>: Full Stack Development<br /><b>Skills</b>:Website Development,     HTML,     API Integration
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Create-marketplace-where-multiple-sellers-can-send-product-feeds-the-site-multiple-times-day_%7E017bf2331fdb203e12?source=rss">click to apply</a>
]]></content:encoded><pubDate>Tue, 31 Aug 2021 21:52:06 +0000</pubDate><guid>https://www.upwork.com/jobs/Create-marketplace-where-multiple-sellers-can-send-product-feeds-the-site-multiple-times-day_%7E017bf2331fdb203e12?source=rss</guid></item><item><title><![CDATA[Digital Marketing - Upwork]]></title><link>https://www.upwork.com/jobs/Digital-Marketing_%7E016d4e574d1caab0d0?source=rss</link><description><![CDATA[Develop an integrated campaign highlighting our products differentiating capabilities to drive awareness, coupon redemption and email acquisition. Campaign to kick off Q4 &#039;21 <br /><br /><b>Budget</b>: $65,000
<br /><b>Posted On</b>: August 31, 2021 21:52 UTC<br /><b>Category</b>: Digital Marketing<br /><b>Skills</b>:Marketing Strategy,     Internet Marketing,     Digital Marketing,     Social Media Content,     Content Strategy,     Email Marketing
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Digital-Marketing_%7E016d4e574d1caab0d0?source=rss">click to apply</a>
]]></description><content:encoded><![CDATA[Develop an integrated campaign highlighting our products differentiating capabilities to drive awareness, coupon redemption and email acquisition. Campaign to kick off Q4 &#039;21 <br /><br /><b>Budget</b>: $65,000
<br /><b>Posted On</b>: August 31, 2021 21:52 UTC<br /><b>Category</b>: Digital Marketing<br /><b>Skills</b>:Marketing Strategy,     Internet Marketing,     Digital Marketing,     Social Media Content,     Content Strategy,     Email Marketing
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Digital-Marketing_%7E016d4e574d1caab0d0?source=rss">click to apply</a>
]]></content:encoded><pubDate>Tue, 31 Aug 2021 21:52:00 +0000</pubDate><guid>https://www.upwork.com/jobs/Digital-Marketing_%7E016d4e574d1caab0d0?source=rss</guid></item><item><title><![CDATA[Seeking Experienced React Native Developer for Investor Backed Pet Application (READ JOB POST) - Upwork]]></title><link>https://www.upwork.com/jobs/Seeking-Experienced-React-Native-Developer-for-Investor-Backed-Pet-Application-READ-JOB-POST_%7E01b9da9ff7e8472b27?source=rss</link><description><![CDATA[PawsPlace LLC is seeking a seasoned React Native developer for the creation of a pet nutrition mobile application. The mobile application is designed to allow pet parents (cat parents and dog parents) to search from a list of over 250+ human foods and ingredients and their respective safety levels for each pet. The veterinarian cited food information has already been created and will need to be imported into each respective food profile. <br /><br />
Within this app, pet parents would have the ability to search for any food/food type and will be returned with food options they can tap and receive more information about. Pet parents will also have the ability to create an account as well as share their &amp;quot;pawsplace referral link&amp;quot; to refer a friend to download the app. If said friend downloads the app via users link they would both receive points that would be redeemable in e gift cards. This would be the gamification aspect of the application and is very key to initial scalability.&nbsp;&nbsp;This is a paid app as well. <br /><br />
Current completed deliverables include:<br />
- Comprehensive mobile app mockup - designed in abode XD<br />
- Fully cited and detailed list of foods and their respective safety levels<br />
-Social Media following of 20k+ across Instagram, Facebook, Reddit, Linkedin, Pinterest<br />
-Seed Investors lined up once app is complete and running (Your opportunity to partner and received equity)<br /><br />
Requirements for said developer includes:<br />
-Proven track record of developing mobile apps for iOS and Android (DO NOT APPLY IF YOU DO NOT HAVE ANY REFERENCES TO YOUR ACTAL WORK)<br />
-In depth knowledge of iOS oriented languages both native or hybrid - frontend and backend (Swift, Objective -C, React Native, Javascript node.js, firebase, AWS)<br />
- Ability to effectively communicate in the form of weekly sprints, updates on application progress<br />
- Linkedin, Reddit, Github or any professional profile outside of upwork as a secondary reference <br />
- Current residence in the United States ONLY<br />
- Must own a pet or be a pet lover<br /><br /><b>Budget</b>: $12,500
<br /><b>Posted On</b>: August 31, 2021 21:43 UTC<br /><b>Category</b>: Mobile App Development<br /><b>Skills</b>:Phone,     Hybrid,     User Authentication,     In-App Search,     API Integration,     Push Notifications,     Payments,     Social Media Account Integration,     JavaScript,     Swift,     Java,     Objective-C,     React Native,     iOS,     Android,     User Profile Creation,     In-App Purchases,     Mobile App Development
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Seeking-Experienced-React-Native-Developer-for-Investor-Backed-Pet-Application-READ-JOB-POST_%7E01b9da9ff7e8472b27?source=rss">click to apply</a>
]]></description><content:encoded><![CDATA[PawsPlace LLC is seeking a seasoned React Native developer for the creation of a pet nutrition mobile application. The mobile application is designed to allow pet parents (cat parents and dog parents) to search from a list of over 250+ human foods and ingredients and their respective safety levels for each pet. The veterinarian cited food information has already been created and will need to be imported into each respective food profile. <br /><br />
Within this app, pet parents would have the ability to search for any food/food type and will be returned with food options they can tap and receive more information about. Pet parents will also have the ability to create an account as well as share their &amp;quot;pawsplace referral link&amp;quot; to refer a friend to download the app. If said friend downloads the app via users link they would both receive points that would be redeemable in e gift cards. This would be the gamification aspect of the application and is very key to initial scalability.&nbsp;&nbsp;This is a paid app as well. <br /><br />
Current completed deliverables include:<br />
- Comprehensive mobile app mockup - designed in abode XD<br />
- Fully cited and detailed list of foods and their respective safety levels<br />
-Social Media following of 20k+ across Instagram, Facebook, Reddit, Linkedin, Pinterest<br />
-Seed Investors lined up once app is complete and running (Your opportunity to partner and received equity)<br /><br />
Requirements for said developer includes:<br />
-Proven track record of developing mobile apps for iOS and Android (DO NOT APPLY IF YOU DO NOT HAVE ANY REFERENCES TO YOUR ACTAL WORK)<br />
-In depth knowledge of iOS oriented languages both native or hybrid - frontend and backend (Swift, Objective -C, React Native, Javascript node.js, firebase, AWS)<br />
- Ability to effectively communicate in the form of weekly sprints, updates on application progress<br />
- Linkedin, Reddit, Github or any professional profile outside of upwork as a secondary reference <br />
- Current residence in the United States ONLY<br />
- Must own a pet or be a pet lover<br /><br /><b>Budget</b>: $12,500
<br /><b>Posted On</b>: August 31, 2021 21:43 UTC<br /><b>Category</b>: Mobile App Development<br /><b>Skills</b>:Phone,     Hybrid,     User Authentication,     In-App Search,     API Integration,     Push Notifications,     Payments,     Social Media Account Integration,     JavaScript,     Swift,     Java,     Objective-C,     React Native,     iOS,     Android,     User Profile Creation,     In-App Purchases,     Mobile App Development
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Seeking-Experienced-React-Native-Developer-for-Investor-Backed-Pet-Application-READ-JOB-POST_%7E01b9da9ff7e8472b27?source=rss">click to apply</a>
]]></content:encoded><pubDate>Tue, 31 Aug 2021 21:43:46 +0000</pubDate><guid>https://www.upwork.com/jobs/Seeking-Experienced-React-Native-Developer-for-Investor-Backed-Pet-Application-READ-JOB-POST_%7E01b9da9ff7e8472b27?source=rss</guid></item><item><title><![CDATA[Administrative Support Assistant. - Upwork]]></title><link>https://www.upwork.com/jobs/Administrative-Support-Assistant_%7E011bda52f9e81cc382?source=rss</link><description><![CDATA[We believe great businesses treat their employees like people, not ID numbers &mdash; and that starts right here in our offices. From hands-on training to our vibrant work environment and truly supportive community, Brickclay is the best place to kickstart your career. We are looking for an industry-experienced Associate Project Coordinator<br /><br /><br />
Responsibilities:<br />
Assist project manager in resource follow-ups and task planning<br />
Maintaining and monitoring project plans, project schedules, work hours<br />
Organizing, attending and participating in stakeholder meetings<br />
Review and reporting for over/under planned resource<br />
Should be able to interact with client interaction and coordination<br />
Assist Project Manager in the implementation of monthly deliverables<br />
Keeping Projects status updated on a daily basis to ensure timely delivery<br />
Track teams, attendance, leaves and highlight exceptions<br /><br />
Skills<br />
Prior experience of coordinating tasks and management of resources is desirable<br />
Should be proactive and a keen learner<br />
Responsive and good communication skills<br />
Command over office applications<br />
Trello, Excel or any project management tool<br />
Self-starter with a positive and enthusiastic attitude<br /><br /><b>Budget</b>: $49,000
<br /><b>Posted On</b>: August 31, 2021 21:08 UTC<br /><b>Category</b>: Virtual/Administrative Assistance<br /><b>Skills</b>:Administrative Support,     Appointment Scheduling,     Email Handling,     Customer Support,     File Management
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Administrative-Support-Assistant_%7E011bda52f9e81cc382?source=rss">click to apply</a>
]]></description><content:encoded><![CDATA[We believe great businesses treat their employees like people, not ID numbers &mdash; and that starts right here in our offices. From hands-on training to our vibrant work environment and truly supportive community, Brickclay is the best place to kickstart your career. We are looking for an industry-experienced Associate Project Coordinator<br /><br /><br />
Responsibilities:<br />
Assist project manager in resource follow-ups and task planning<br />
Maintaining and monitoring project plans, project schedules, work hours<br />
Organizing, attending and participating in stakeholder meetings<br />
Review and reporting for over/under planned resource<br />
Should be able to interact with client interaction and coordination<br />
Assist Project Manager in the implementation of monthly deliverables<br />
Keeping Projects status updated on a daily basis to ensure timely delivery<br />
Track teams, attendance, leaves and highlight exceptions<br /><br />
Skills<br />
Prior experience of coordinating tasks and management of resources is desirable<br />
Should be proactive and a keen learner<br />
Responsive and good communication skills<br />
Command over office applications<br />
Trello, Excel or any project management tool<br />
Self-starter with a positive and enthusiastic attitude<br /><br /><b>Budget</b>: $49,000
<br /><b>Posted On</b>: August 31, 2021 21:08 UTC<br /><b>Category</b>: Virtual/Administrative Assistance<br /><b>Skills</b>:Administrative Support,     Appointment Scheduling,     Email Handling,     Customer Support,     File Management
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Administrative-Support-Assistant_%7E011bda52f9e81cc382?source=rss">click to apply</a>
]]></content:encoded><pubDate>Tue, 31 Aug 2021 21:08:37 +0000</pubDate><guid>https://www.upwork.com/jobs/Administrative-Support-Assistant_%7E011bda52f9e81cc382?source=rss</guid></item><item><title><![CDATA[Head of DevOps - Upwork]]></title><link>https://www.upwork.com/jobs/Head-DevOps_%7E01aae5c24938b0519d?source=rss</link><description><![CDATA[Composite Apps is an enterprise software company based out of Irvine, CA. We have clients that range from major defense contractors to Fortune 500 organizations to major healthcare networks. The focus of our work is to solve complex business problems while navigating p[otential challenges and customers&rsquo; needs using an array of design thinking techniques, emerging technologies, and proven business principles. <br /><br />
As the DevOps Manager, you will take ownership of infrastructure for supporting a wide range of end-users in a production environment.&nbsp;&nbsp;In this role, you will automate builds as well as contribute to continuous integration, software releases, and system deployment. You will be responsible for monitoring and supporting the production environment, which includes scanning for security vulnerabilities, supporting production outages, and changing management activities. In addition to these responsibilities,&nbsp;&nbsp;you will write scripts to automate our processes as well as monitor performance and security alerts.<br /><br />
Responsibilities:<br /><br />
Providing infrastructure and support for software engineers, product, and QA to rapidly iterate on their products and services and deliver high-quality results.<br />
Taking ownership of infrastructure for automated builds and testing, continuous integration, software releases, and system deployment.<br />
Maintaining a broad understanding of tools and technologies: version control, continuous integration, infrastructure automation, deployment automation, container concepts, orchestration and cloud, and the ability to communicate these concepts to stakeholders on multiple projects.<br />
Identifying areas that can benefit from additional automation, monitoring, and infrastructure-as-code, and develop and scale products and services accordingly.<br />
Adhering to software development standards and practices. Helping to drive improvements to our build system scripts, tools, and processes.<br />
Developing a modern continuous deployment platform with cutting-edge technologies (containers, cluster schedulers, service mesh, dynamic secrets provisioning).<br />
Writing scripts to automate installations, maintenance, migrations, etc.<br />
Support project migration to the GovCloud environment.<br /><br />
Knowledge and Experience<br /><br />
AWS platform-native technologies, such as: <br />
Regional Database Service (RDS) <br />
Elastic Compute Cloud (Amazon EC2) with load balancing and auto scaling <br />
Virtual Private Cloud Cloud (Amazon VPC) with subnets, routing tables, internet gateways, and peering connections<br />
Web Application Firewall (WAF)<br />
Simple Storage Service (Amazon S3) with static website hosting<br />
Virtual private cloud (Amazon VPC) with subnets, routing, tables, internet gateways, and peering connections<br />
Route 53 scalable cloud domain name systems <br />
CloudWatch with dashboards, alarms, logs, and metrics<br />
Simple notification system (Amazon SNS)<br />
Elastic Kubernetes service (Amazon EKS) with ECS, ECR, and Docker containerization<br />
Certificate manager for SSL certificate management (renewal, reissue, redeploy) AWS backup<br />
Athena SQL query service<br />
Knowledge and experience with MS Azure Cloud Environments<br /><br />
Skills:<br /><br />
The ability to:<br />
Implement alerting integrations. Troubleshoot infrastructure issues in AWS cloud and local network<br />
Automate infrastructure with Linux Bash scripting<br />
Support product development (server/service connectivity, latency, and uptime monitoring)<br />
Work with virtualization solutions, such as VMWare, Citrix, Proxmox<br />
Manage IT resources, contracts, and procurements <br /><br />
Requirements:<br /><br />
BS in Computer Science or related field and a minimum of 5 years experience as a System Administrator<br />
Must be able to work from our Irvine office location<br />
Must be a US Citizen -or- Green Card Holder<br />
Must be able to pass a background/security check<br /><br />
Pay: $120,000 - $150,000<br /><br /><b>Budget</b>: $100,000
<br /><b>Posted On</b>: August 31, 2021 20:22 UTC<br /><b>Category</b>: DevOps Engineering<br /><b>Skills</b>:Healthcare &amp; Medical,     Configuration Management,     Infrastructure Management,     Automated Monitoring,     Amazon Web Services,     DevOps,     Deployment Automation,     Automation Software Release
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Head-DevOps_%7E01aae5c24938b0519d?source=rss">click to apply</a>
]]></description><content:encoded><![CDATA[Composite Apps is an enterprise software company based out of Irvine, CA. We have clients that range from major defense contractors to Fortune 500 organizations to major healthcare networks. The focus of our work is to solve complex business problems while navigating p[otential challenges and customers&rsquo; needs using an array of design thinking techniques, emerging technologies, and proven business principles. <br /><br />
As the DevOps Manager, you will take ownership of infrastructure for supporting a wide range of end-users in a production environment.&nbsp;&nbsp;In this role, you will automate builds as well as contribute to continuous integration, software releases, and system deployment. You will be responsible for monitoring and supporting the production environment, which includes scanning for security vulnerabilities, supporting production outages, and changing management activities. In addition to these responsibilities,&nbsp;&nbsp;you will write scripts to automate our processes as well as monitor performance and security alerts.<br /><br />
Responsibilities:<br /><br />
Providing infrastructure and support for software engineers, product, and QA to rapidly iterate on their products and services and deliver high-quality results.<br />
Taking ownership of infrastructure for automated builds and testing, continuous integration, software releases, and system deployment.<br />
Maintaining a broad understanding of tools and technologies: version control, continuous integration, infrastructure automation, deployment automation, container concepts, orchestration and cloud, and the ability to communicate these concepts to stakeholders on multiple projects.<br />
Identifying areas that can benefit from additional automation, monitoring, and infrastructure-as-code, and develop and scale products and services accordingly.<br />
Adhering to software development standards and practices. Helping to drive improvements to our build system scripts, tools, and processes.<br />
Developing a modern continuous deployment platform with cutting-edge technologies (containers, cluster schedulers, service mesh, dynamic secrets provisioning).<br />
Writing scripts to automate installations, maintenance, migrations, etc.<br />
Support project migration to the GovCloud environment.<br /><br />
Knowledge and Experience<br /><br />
AWS platform-native technologies, such as: <br />
Regional Database Service (RDS) <br />
Elastic Compute Cloud (Amazon EC2) with load balancing and auto scaling <br />
Virtual Private Cloud Cloud (Amazon VPC) with subnets, routing tables, internet gateways, and peering connections<br />
Web Application Firewall (WAF)<br />
Simple Storage Service (Amazon S3) with static website hosting<br />
Virtual private cloud (Amazon VPC) with subnets, routing, tables, internet gateways, and peering connections<br />
Route 53 scalable cloud domain name systems <br />
CloudWatch with dashboards, alarms, logs, and metrics<br />
Simple notification system (Amazon SNS)<br />
Elastic Kubernetes service (Amazon EKS) with ECS, ECR, and Docker containerization<br />
Certificate manager for SSL certificate management (renewal, reissue, redeploy) AWS backup<br />
Athena SQL query service<br />
Knowledge and experience with MS Azure Cloud Environments<br /><br />
Skills:<br /><br />
The ability to:<br />
Implement alerting integrations. Troubleshoot infrastructure issues in AWS cloud and local network<br />
Automate infrastructure with Linux Bash scripting<br />
Support product development (server/service connectivity, latency, and uptime monitoring)<br />
Work with virtualization solutions, such as VMWare, Citrix, Proxmox<br />
Manage IT resources, contracts, and procurements <br /><br />
Requirements:<br /><br />
BS in Computer Science or related field and a minimum of 5 years experience as a System Administrator<br />
Must be able to work from our Irvine office location<br />
Must be a US Citizen -or- Green Card Holder<br />
Must be able to pass a background/security check<br /><br />
Pay: $120,000 - $150,000<br /><br /><b>Budget</b>: $100,000
<br /><b>Posted On</b>: August 31, 2021 20:22 UTC<br /><b>Category</b>: DevOps Engineering<br /><b>Skills</b>:Healthcare &amp; Medical,     Configuration Management,     Infrastructure Management,     Automated Monitoring,     Amazon Web Services,     DevOps,     Deployment Automation,     Automation Software Release
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Head-DevOps_%7E01aae5c24938b0519d?source=rss">click to apply</a>
]]></content:encoded><pubDate>Tue, 31 Aug 2021 20:22:34 +0000</pubDate><guid>https://www.upwork.com/jobs/Head-DevOps_%7E01aae5c24938b0519d?source=rss</guid></item><item><title><![CDATA[Wholesale Sales Manager - Upwork]]></title><link>https://www.upwork.com/jobs/Wholesale-Sales-Manager_%7E01a4f3a1b7db813ad2?source=rss</link><description><![CDATA[Wholesale Sales Manager - Job Description<br />
Sea Star Beachwear was founded in the Summer of 2015 with the goal of creating a specialized lifestyle brand that designs, manufactures, and sells fashionable water shoes for men, women and children. Inspired by the effortless sophistication of the Riviera jet-set lifestyle and pure Americana spirit, our espadrilles combine practicality and versatility with classic style to align with today&rsquo;s comfort yet style-conscious consumer. Sea Star Beachwear re-imagined the traditional espadrille with a breathable, quick-drying neoprene upper and a protective rubber sole. Our collection embraces the wanderlista lifestyle by providing a comfortable, chic, affordable, and protective shoe that takes you wherever adventure calls.<br />
The Wholesale Sales Manager is responsible for leading and developing further growth in our robust wholesale accounts. We are looking for a self-starter with previous sales experience, agile in startup environments and a strategy contributor to growing topline &amp;amp; profitability. The Wholesale Sales Manager will meet objectives and targets, while expressing the brand DNA in retail environments. Previous fashion experience welcome.<br />
Position: Wholesale Sales Manager, Sea Star Beachwear Reporting To: CEO<br />
Based: New York, NY<br />
WHOLESALE STRATEGY &amp;amp; SALES<br />
â— Develop wholesale strategic roadmap, oriented towards increasing distribution exposure of the Sea Star Beachwear line.<br />
â— Captain strategies to improve productivity, topline revenues, and profitability across all key accounts<br />
â— Achieve sales and profitability targets for US and International markets<br />
â— Develop strategic and financial objectives that are aligned with corporate goals<br />
â— Manage growth in existing channels while helping to identify new opportunities within<br />
domestic and international markets<br />
â— Develop powerful and lasting relationships with buyers and merchants<br />
â— Negotiate and launch other channels of distribution and assure continued success and<br />
flawless execution in existing and new distribution<br />
â— Process and capture payment of all orders through Joor and Hilldun (where applicable)<br />
â— Work closely with Bergen Logistics (warehouse) to ensure timely shipping and cross<br />
docks for all accounts<br />
â— Assist in placing seasonal orders with factory<br />
â— Maintain listing of all current and prospect accounts. Keep website updated.<br />
â— Manage and participate in trade shows (2/yr)<br />
â— Maintain relationships with drop-ship buyers (Nordstrom, Saks, Neiman Marcus, QVC)<br />
â— Some travel - trunk shows and store visits<br />
STRATEGIC LEADERSHIP<br />
â— Serve as a key member of the Executive Leadership Team, collaborating to develop and implement the company&#039;s objectives, goals, strategies, policies and operating procedures<br />
â— Collaborate with Marketing to meet customer&#039;s needs, facilitate brand building, develop customer-specific integrated marketing plans, influence new product development and activate the marketing tools and activities<br />
â— Ensure the highest customer service for retail partners, creating a superior, memorable, consistent customer experience<br />
â— Stay abreast of current industry trends and competitor activity in the marketplace SALES FORECASTING &amp;amp; REPORTING<br />
â— Provide insights into bottoms-up and top-down forecasting for all key accounts<br />
â— Work closely with Operations on demand planning to ensure adequate inventory levels,<br />
supply chain flows and B-to-B customer service<br />
â— Provide key performance reports across KPIs to ensure visibility across peers and<br />
leadership team QUALIFICATIONS:<br />
â— 1-2 years of experience in the retail/apparel industry<br />
â— Proficient in Joor, Apparel Magic and WMS software systems<br />
â— Familiarity/experience with wholesale account management<br />
â— Highly organized and technically proficient<br />
â— Ability to work independently and handle multiple projects<br />
â— Take initiative and problem solve<br />
â— Communicate well with SSB team and wholesale accounts<br />
Employment Type<br />
Full-time<br /><br /><b>Budget</b>: $75,000
<br /><b>Posted On</b>: August 31, 2021 20:05 UTC<br /><b>Category</b>: Sales &amp; Business Development<br /><b>Skills</b>:Sales,     Sales Process,     Lead Generation,     Relationship Management,     Cold Calling,     Partnership Development,     B2B
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Wholesale-Sales-Manager_%7E01a4f3a1b7db813ad2?source=rss">click to apply</a>
]]></description><content:encoded><![CDATA[Wholesale Sales Manager - Job Description<br />
Sea Star Beachwear was founded in the Summer of 2015 with the goal of creating a specialized lifestyle brand that designs, manufactures, and sells fashionable water shoes for men, women and children. Inspired by the effortless sophistication of the Riviera jet-set lifestyle and pure Americana spirit, our espadrilles combine practicality and versatility with classic style to align with today&rsquo;s comfort yet style-conscious consumer. Sea Star Beachwear re-imagined the traditional espadrille with a breathable, quick-drying neoprene upper and a protective rubber sole. Our collection embraces the wanderlista lifestyle by providing a comfortable, chic, affordable, and protective shoe that takes you wherever adventure calls.<br />
The Wholesale Sales Manager is responsible for leading and developing further growth in our robust wholesale accounts. We are looking for a self-starter with previous sales experience, agile in startup environments and a strategy contributor to growing topline &amp;amp; profitability. The Wholesale Sales Manager will meet objectives and targets, while expressing the brand DNA in retail environments. Previous fashion experience welcome.<br />
Position: Wholesale Sales Manager, Sea Star Beachwear Reporting To: CEO<br />
Based: New York, NY<br />
WHOLESALE STRATEGY &amp;amp; SALES<br />
â— Develop wholesale strategic roadmap, oriented towards increasing distribution exposure of the Sea Star Beachwear line.<br />
â— Captain strategies to improve productivity, topline revenues, and profitability across all key accounts<br />
â— Achieve sales and profitability targets for US and International markets<br />
â— Develop strategic and financial objectives that are aligned with corporate goals<br />
â— Manage growth in existing channels while helping to identify new opportunities within<br />
domestic and international markets<br />
â— Develop powerful and lasting relationships with buyers and merchants<br />
â— Negotiate and launch other channels of distribution and assure continued success and<br />
flawless execution in existing and new distribution<br />
â— Process and capture payment of all orders through Joor and Hilldun (where applicable)<br />
â— Work closely with Bergen Logistics (warehouse) to ensure timely shipping and cross<br />
docks for all accounts<br />
â— Assist in placing seasonal orders with factory<br />
â— Maintain listing of all current and prospect accounts. Keep website updated.<br />
â— Manage and participate in trade shows (2/yr)<br />
â— Maintain relationships with drop-ship buyers (Nordstrom, Saks, Neiman Marcus, QVC)<br />
â— Some travel - trunk shows and store visits<br />
STRATEGIC LEADERSHIP<br />
â— Serve as a key member of the Executive Leadership Team, collaborating to develop and implement the company&#039;s objectives, goals, strategies, policies and operating procedures<br />
â— Collaborate with Marketing to meet customer&#039;s needs, facilitate brand building, develop customer-specific integrated marketing plans, influence new product development and activate the marketing tools and activities<br />
â— Ensure the highest customer service for retail partners, creating a superior, memorable, consistent customer experience<br />
â— Stay abreast of current industry trends and competitor activity in the marketplace SALES FORECASTING &amp;amp; REPORTING<br />
â— Provide insights into bottoms-up and top-down forecasting for all key accounts<br />
â— Work closely with Operations on demand planning to ensure adequate inventory levels,<br />
supply chain flows and B-to-B customer service<br />
â— Provide key performance reports across KPIs to ensure visibility across peers and<br />
leadership team QUALIFICATIONS:<br />
â— 1-2 years of experience in the retail/apparel industry<br />
â— Proficient in Joor, Apparel Magic and WMS software systems<br />
â— Familiarity/experience with wholesale account management<br />
â— Highly organized and technically proficient<br />
â— Ability to work independently and handle multiple projects<br />
â— Take initiative and problem solve<br />
â— Communicate well with SSB team and wholesale accounts<br />
Employment Type<br />
Full-time<br /><br /><b>Budget</b>: $75,000
<br /><b>Posted On</b>: August 31, 2021 20:05 UTC<br /><b>Category</b>: Sales &amp; Business Development<br /><b>Skills</b>:Sales,     Sales Process,     Lead Generation,     Relationship Management,     Cold Calling,     Partnership Development,     B2B
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Wholesale-Sales-Manager_%7E01a4f3a1b7db813ad2?source=rss">click to apply</a>
]]></content:encoded><pubDate>Tue, 31 Aug 2021 20:05:36 +0000</pubDate><guid>https://www.upwork.com/jobs/Wholesale-Sales-Manager_%7E01a4f3a1b7db813ad2?source=rss</guid></item><item><title><![CDATA[Animator needed for movie - Upwork]]></title><link>https://www.upwork.com/jobs/Animator-needed-for-movie_%7E0197170874f51d802d?source=rss</link><description><![CDATA[Looking for an animator who is skilled specifically with characters and lots of movement, including flight and battle scenes.<br /><br />
We&#039;re just getting started as a company and I want to make a grand entrance into the animation and movie industry. <br /><br /><b>Budget</b>: $10,000
<br /><b>Posted On</b>: August 31, 2021 19:02 UTC<br /><b>Category</b>: Cartoons &amp; Comics<br /><b>Skills</b>:2D Animation,     Animation,     Motion Graphics,     Character,     Illustration,     Character Animation,     Traditional Animation,     Anime,     Cartooning,     Cartoon Character
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Animator-needed-for-movie_%7E0197170874f51d802d?source=rss">click to apply</a>
]]></description><content:encoded><![CDATA[Looking for an animator who is skilled specifically with characters and lots of movement, including flight and battle scenes.<br /><br />
We&#039;re just getting started as a company and I want to make a grand entrance into the animation and movie industry. <br /><br /><b>Budget</b>: $10,000
<br /><b>Posted On</b>: August 31, 2021 19:02 UTC<br /><b>Category</b>: Cartoons &amp; Comics<br /><b>Skills</b>:2D Animation,     Animation,     Motion Graphics,     Character,     Illustration,     Character Animation,     Traditional Animation,     Anime,     Cartooning,     Cartoon Character
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Animator-needed-for-movie_%7E0197170874f51d802d?source=rss">click to apply</a>
]]></content:encoded><pubDate>Tue, 31 Aug 2021 19:02:12 +0000</pubDate><guid>https://www.upwork.com/jobs/Animator-needed-for-movie_%7E0197170874f51d802d?source=rss</guid></item><item><title><![CDATA[Graphic Mobile Application Designer wanted - Functional Mockup  - Upwork]]></title><link>https://www.upwork.com/jobs/Graphic-Mobile-Application-Designer-wanted-Functional-Mockup_%7E01f5c982a5348cb55e?source=rss</link><description><![CDATA[We&#039;re a car rental company ready to start building out our mobile app and are looking for a designer that can prepare the UI/UX we need in order to plug our existing software into a mobile interface. We have a complete set of wireframes ready to go, and need a competent designer to help us bring it to life. <br /><br />
For the deliverable, we&#039;re looking for a functional mockup that works on iOS 12 and above, and on Lollipop and above for Android. <br /><br />
Experience designing apps that are on the Apple App Store and/or the Google Play Store is a plus. Experience with tools like Origami and Sketch is also preferred.<br /><br /><br /><b>Budget</b>: $10,000
<br /><b>Posted On</b>: August 31, 2021 15:29 UTC<br /><b>Category</b>: Mobile Design<br /><b>Skills</b>:iOS,     Android,     User Flows,     Mobile App,     High Fidelity Design,     UX Writing,     Interaction Design,     Responsive Design,     App Development,     Mobile App Design,     Sketch,     Prototype,     Mockup,     Graphic Design
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Graphic-Mobile-Application-Designer-wanted-Functional-Mockup_%7E01f5c982a5348cb55e?source=rss">click to apply</a>
]]></description><content:encoded><![CDATA[We&#039;re a car rental company ready to start building out our mobile app and are looking for a designer that can prepare the UI/UX we need in order to plug our existing software into a mobile interface. We have a complete set of wireframes ready to go, and need a competent designer to help us bring it to life. <br /><br />
For the deliverable, we&#039;re looking for a functional mockup that works on iOS 12 and above, and on Lollipop and above for Android. <br /><br />
Experience designing apps that are on the Apple App Store and/or the Google Play Store is a plus. Experience with tools like Origami and Sketch is also preferred.<br /><br /><br /><b>Budget</b>: $10,000
<br /><b>Posted On</b>: August 31, 2021 15:29 UTC<br /><b>Category</b>: Mobile Design<br /><b>Skills</b>:iOS,     Android,     User Flows,     Mobile App,     High Fidelity Design,     UX Writing,     Interaction Design,     Responsive Design,     App Development,     Mobile App Design,     Sketch,     Prototype,     Mockup,     Graphic Design
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Graphic-Mobile-Application-Designer-wanted-Functional-Mockup_%7E01f5c982a5348cb55e?source=rss">click to apply</a>
]]></content:encoded><pubDate>Tue, 31 Aug 2021 15:29:26 +0000</pubDate><guid>https://www.upwork.com/jobs/Graphic-Mobile-Application-Designer-wanted-Functional-Mockup_%7E01f5c982a5348cb55e?source=rss</guid></item><item><title><![CDATA[Telecommunications content creator with advanced Articulate 360 skills. - Upwork]]></title><link>https://www.upwork.com/jobs/Telecommunications-content-creator-with-advanced-Articulate-360-skills_%7E011b4ebdab0e0d4bc8?source=rss</link><description><![CDATA[* Create learning modules for an advanced technology telecommunications company. <br /><br />
* Strong background with Articulate 360, utilizing overlays, images interactive testing <br />
&nbsp;&nbsp;&nbsp;and talk tracks.<br /><br />
* Ability to complete small to large projects in an efficient and timely manner. <br /><br />
* Ability to effectively and clearly communicate project updates and seek direction as <br />
&nbsp;&nbsp;&nbsp;needed. <br /><br />
* Adhere to company branding, images, logos, font style/size &amp;amp; color<br /><br />
*Understanding of adult learning theory and ability to develop content that promotes <br />
&nbsp;&nbsp;knowledge transfer.<br /><br /><b>Budget</b>: $35,000
<br /><b>Posted On</b>: August 31, 2021 14:22 UTC<br /><b>Category</b>: Content Writing<br /><b>Skills</b>:eLearning,     Articulate Storyline,     Course,     Training,     SCORM
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Telecommunications-content-creator-with-advanced-Articulate-360-skills_%7E011b4ebdab0e0d4bc8?source=rss">click to apply</a>
]]></description><content:encoded><![CDATA[* Create learning modules for an advanced technology telecommunications company. <br /><br />
* Strong background with Articulate 360, utilizing overlays, images interactive testing <br />
&nbsp;&nbsp;&nbsp;and talk tracks.<br /><br />
* Ability to complete small to large projects in an efficient and timely manner. <br /><br />
* Ability to effectively and clearly communicate project updates and seek direction as <br />
&nbsp;&nbsp;&nbsp;needed. <br /><br />
* Adhere to company branding, images, logos, font style/size &amp;amp; color<br /><br />
*Understanding of adult learning theory and ability to develop content that promotes <br />
&nbsp;&nbsp;knowledge transfer.<br /><br /><b>Budget</b>: $35,000
<br /><b>Posted On</b>: August 31, 2021 14:22 UTC<br /><b>Category</b>: Content Writing<br /><b>Skills</b>:eLearning,     Articulate Storyline,     Course,     Training,     SCORM
<br /><b>Location Requirement</b>: Only freelancers located in the United States may apply.
<br /><b>Country</b>: United States
<br /><a href="https://www.upwork.com/jobs/Telecommunications-content-creator-with-advanced-Articulate-360-skills_%7E011b4ebdab0e0d4bc8?source=rss">click to apply</a>
]]></content:encoded><pubDate>Tue, 31 Aug 2021 14:22:24 +0000</pubDate><guid>https://www.upwork.com/jobs/Telecommunications-content-creator-with-advanced-Articulate-360-skills_%7E011b4ebdab0e0d4bc8?source=rss</guid></item></channel></rss>