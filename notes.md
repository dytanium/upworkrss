# About
This app is intended to crawl various Upwork RSS feed URLs, index the results, and allow a user to view or delete the job postings.

# Notes
1. The RSS only returns up to 100 results, regardless of the 'paging' URL var

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