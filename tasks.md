# Next Steps
* Echo
* Refactor dashboard
* Filtering
* Bulk status update

# Dashboard
- Continue working on top and bottom menus
[x] - Can we put the bottom paginator at the true bottom of the page?? - NO
- Cloak the two dropdown menus - theres a flicker on page reload
- Need to add a status icon/badge somewhere - peep the livewire page with the transaction status
- Sketch the bulk UI and how it will work
- Begin the bulk UI stuff - use flex, flex-grow, etc
- Need a checkbox for each listing (for bulk actions)
- Need a bulk status bar message thing somewhere
- Need to 'select all' when seleting all, just like livewire and gmail do (basically select all of the query results)
- Or better yet, build the pagination like gmail - a simple message with < >

# Setup Echo
* Setup a component on the front that adds an alert bar when there are new listings with an option to refresh. Don't refresh the entire dashboard component immediately - trap the number of new listings within this alert, then allow the user to refresh when needed
* When the background job goes off, communicate with the frontend somehow and update the 'last refreshed' date of the feed.


# Dashboard
* Begin to think about filter - to start with, add a feed filter, then a status filter
* Redesign the listing table. Need to scrap the HREF covering the title and description. I like the idea of the modal, so work on that too
*  Work on listing modal
    * Add left/right arrors to the listing modal
* Refactor dashboard listings with something from here: https://tailwindui.com/components/application-ui/lists/stacked-lists


# Write Tests
* Start with Login


## Feeds
### View
[x] 1. New component and route
2.





## FINISHED
[x] * When clicking on the visit button, set the listing status to something other than NEW - so it hides the listing when browsing
[x] * Pagination
[x] * Move color dot to left side - no
[x] * Add another button to 'archive' or something? same function as visit, but without opening a new tab
[x] * For the feed list, setup JS so that the 'Checked at' auto updates every x seconds (or minutes) - done with polling
[x] * Add 'visited' status to listings. That way 'archived' could be used to view proposals you want to see later
[x] * Add a 'totals' to the top of the listings
[x] * Add a 'out of' to the top, this will be the listing currently on display out of the total number of the filter(s)
[x] * on pagination click, return to the top of the page
[x] 19. Refactor sidebar component - add Feed component. The refresh should be within the Feed livewire component
### Feed Create
[x] 1. New component and route
[x] 2. What needs to be collected?
[x] 3. Create the form - for color: https://tailwindui.com/components/application-ui/forms/select-menus
[x] 4. Create the backend code to save feed
[x] 5. Finish form, ensure the color works properly
[x] 6. Ensure new feed shows up on dashboard
[x] 7. Pull in a notification component
[x] 8. When saving a feed, send a notification
[x] 9. Cleanup the save code - use a relationship
[x] 10. Cleanup the HTML! see if we can get the dropdown status-select to work - we want to see the colors!
### Sidebar
[x] 1. Convert to a livewire component
[x] 2. Figure out how to include the livewire component on the dashboard template
[x] 3. Create the logout function
[x] 4. Create the avatar function - if not present, use initials like jetstream
[x] 5. Might need to update user mgirations with avatar field
[x] 6. Add link for Listings/Home with icon
[x] 7. Add link for Feeds with icon
[x] 8. Add link for Proposals with icon
[x] 9. Feed Legend area
[x] 10. When component loads, attach the user feeds (or use a relationship)
[x] 11. Populate my account with some feeds using the seeder
[x] 12. Each feed needs a color
[x] 13. Ensure sidebar looks good and functions well!
### Dashboard
[x] 1. New livewire component and route
[x] 2. Make sure the auth middleware is in use
[x] 3. Use the app layout
[x] 4. Figure out the design of this page - use placeholder divs, etc
    [x] 1. Sketch it out! What is it that we WANT?
[x] 5. Add sidebar component
[x] 6. Add a placeholder search component
[x] 7. Load 'new' listings for the user
[x] 8. Display new listings for the user (placeholder-ish) no pagination, etc
[x] 9. Add icon/button for delete
[x] 10. Add icon/button for view
[x] 11. Figure out what happens when you click delete
[x] 12. Figure out what happens when you click view - needs to load site in background tab
[x] 13. Add hover styles to the table rows - maybe even an outline to the hovered row
[x] 14. Format the date/time
[x] 15. Refactor the buttons!
[x] 16. Bring over modal code and prepare it to view a listing in full detail
[x] 17. How to refresh the listing table when clicking on one of the feeds?
[x] 18. How to do polling -> refresh each feed every 5 minutes. Easy but, still need the backend working
[x] 19. Setup the backend job queue and run every 5 minutes for each feed
[x] 20. Extract core feed parsing logic outside of the Command so the sidebar can use it
### Login
[x] 1. Create livewire component and route(s)?
[x] 2. Write the form
[x] 3. Peep the code from Surge
[x] 4. Button needs to disable when the login is attempted
[x] 5. Error message shows upon invalid login attempt
[x] 6. This should use a simple blade layout, not the main app layout (so simple.blade.php)
[x] 7. Add seed for myself
[x] 8. Upon login, redirect to...
[x] 9. Implement remember me feature
### Layout
[x] 1. Find layout from TailwindUI
[x] 2. Implement proper styling, fonts, etc for TailwindUI
[x] 3. Create app shell using selected layout
[x] 4. Figure out logged-in menu
[x] 5. Begin breaking into blade components
[x] 6. Start with login page and livewire component
### Feed Job
[x] 1. Create a new console command we can run manually at first
[x] 2. Have it pick a certain feed -> maybe one we create via a feeder
[x] 3. Ensure it can select the feed from the DB and has the URL to parse
[x] 4. Now what?


# Someday
[x] 1. On main sidebar, add last updated to each feed
2. Remove base temlates (like navigation.blade.php)
3. Could I expand this into an RSS reader?!
4. Perhaps a way to 'rank' a potential listing? Put this in the 'LATER' category
5. Add pagination to top and try to stickyify it