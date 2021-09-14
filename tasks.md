# Layout
1. Find layout from TailwindUI
2. Implement proper styling, fonts, etc for TailwindUI
3. Create app shell using selected layout
4. Figure out logged-in menu
5. Begin breaking into blade components
6. Start with login page and livewire component


## Login
[x] 1. Create livewire component and route(s)?
[x] 2. Write the form
[x] 3. Peep the code from Surge
[x] 4. Button needs to disable when the login is attempted
[x] 5. Error message shows upon invalid login attempt
[x] 6. This should use a simple blade layout, not the main app layout (so simple.blade.php)
[x] 7. Add seed for myself
[x] 8. Upon login, redirect to...
[x] 9. Implement remember me feature

## Dashboard
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
17. Refactor dashboard listings with something from here: https://tailwindui.com/components/application-ui/lists/stacked-lists
18. On delete, animate the row being removed?



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

## Feeds
### Create
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

### View
[x] 1. New component and route
2.

# Someday
1. On main sidebar, add last updated to each feed
2. Remove base temlates (like navigation.blade.php)