# Web Developer Test

Let's pretend AlgaeCal is creating a simple membership site where customers may view a library of 
exclusive video content.

The site uses Slim framework as a backend and Nuxt, VueJS and BootstrapVue on the Frontend.

Based on the skeleton code provided, please make the following modifications:

* Implement a Vuex store. You will use this to store data such as login.

* The submit form must validate against the list of members. Unlike a real-world application we
won't be checking passwords, but we will want to make sure the customer exists. User data is
found at the uri: http://localhost:8080/users

* If a person goes to http://localhost:3000 they should be redirected to a http://localhost:3000/login
if they are not logged in, or http://localhost:3000/videos if they are logged in. Login persistence
is not a requirement. If I refresh the page, it is okay if I get logged out (and if this does happen,
I should get automatically redirected to the login page)

* A user who is not logged in and goes to anywhere besides /login should be redirected to /login

* Modify the login form found at uri: http://localhost:3000/login
    - Move the login form into a "LoginForm" component
    - Instead of checking against "email address" as the form currently implies, check against
    "username"
    - Display the message 'Sorry, that username is not found' if the person does not exist. Otherwise
    log them in and direct them to http://localhost:3000/videos

* Copying the patterns used to create the Users, create a video library resource on this RESTful
api. The video endpoint should return this JSON:
```json
{
  "statusCode": 200,
  "data": [
    {
      "id": 1,
      "title": "What It’s Like To Work At AlgaeCal,
      "description": "Discover what it’s like to work at AlgaeCal with this quick video!",
      "video_id": "m3ralniniq"
    },
    {
      "id": 2,
      "title": "Esther Mangini Testimonial,
      "category": "Testimonials",
      "description": "Esther’s journey to healthier bones”,
      "video_id": "ybyot0dm7q"
    },
    {
      "id": 3,
      "title": "Teresa Cucurull Testimonial",
      "description": "Teresa’s journey to healthier bones”,
      "video_id": "mhmv73k989"
    },
    {
      "id": 4,
      "title": "Perfect Pilates For Osteoporosis - Legwork,
      "description": "Bone Healthy Exercises!”,
      "video_id": "3n5p02h26w"
    },
    {
      "id": 5,
      "title": "Perfect Pilates For Osteoporosis - Amazing Abs",
      "description": "Bone Healthy Exercises!",
      "video_id": "kkgeu7v2va"
    },
    {
      "id": 6,
      "title": "Lara's Homemade Granola",
      "description": "Bone Healthy Recipes",
      "video_id": "m6amjftj3w"
    },
    {
      "id": 7,
      "title": "Brazil Nut Pesto",
      "description": "Bone Healthy Recipes",
      "video_id": "ajoe5d0jk0"
    }
  ]
}
```

* The `/videos` page should use this data to populate the video list. Each list item should 
link to an individual video playing page, `/videos/{video_id}` that has a single player and
description of the video on it.

* Video thumbnails can be retrieved using the video_id along with the [Wistia video api](https://wistia.com/support/developers/data-api#medias_show)

## Layout
* Nav Bar
* Footer

## Pages
/login
   Blue button to algaecal green
   Login failure messages: no username found; possible validation checks
   Better text styling

/videos
    Layout improvement
    Hover on list items
    Click to go to video page
    Structure video description
    Videos are filterable based on category
    
/videos/{video_id}
    Layout
    
## Components Needed:
LoginForm: the login form itself
VideoSummary: Thumbnail, title, description
VideoPlayer: Take a Wistia Id and create a player for it.

## Notes on Git and Delivery
Note: Make sure your submission includes a complete git history with meaningful commit messages.

When you have completed your test, please save your project to your own repo and email a link to 
your repo to Steve, Bob and Charlene: steve@algaecal.com, bob@algaecal.com, and 
charlene@algaecal.com, please make sure your project is accessible to us.

In your email, please also attach your resume and cover letter, and a link to your portfolio/or 
links to any examples of your work. 
