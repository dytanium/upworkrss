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
