# DiscussionForum
A place for like minded people to discuss stuff....

### List of contents

- [Introduction](#introduction)
- [Working](#working)
- [Installation](#installation)
- [Running](#running)


## Introduction
---
[(Back to top)](#list-of-contents)
Discussion Forum is a website developed using PHP as backend and HTML , CSS ,JS for the frontend.The website provides facilities to the users to ask question on different and get answer about the topic from different users.  The website allows user to register and then login into the website and ask and answer any query they have reagarding a particular topic. All the answered question are also present in home page which users can read without need to register.To answer a question user need to be registered.Like counter is maintained for each answer so that it can be more helpful for user to choose the correct answer. Admin of the website is provided with various priveleges such as it can delete user, publish/unpublish questions asked, delete comments which are inappropriate. User can track the questions they have asked and the answer posted by them on any question. user can also edit its profile.



## Working
---
[(Back to top)](#list-of-contents)

The steps involved in creating the website.

+ The backend has been developed in PHP and database used in SQL.

+ The Frontend involves the usage of HTML, CSS and JS. The frontend consists of Login and Registration forms along with other important components like pop-ups for on-screen signin/signup, navigation bars, footer and home page. 

+ Sessions are used to remember signin user data which is used to persist state information between page requests.

+ SQL database is being used to store the user info,post info,comment info,view info.All the CURD operational queries are written raw SQL statements

+ Users can have a look at the answered queries stored in the database at home page in the website. Admin can manage users and posts. Registered user can see the questions asked, question answered,update its profile

 
## Installation
---
[(Back to top)](#list-of-contents)

- Run XAMPP server.
- Create database forum_db in phpMyAdmin.
- In the database create the required tables 
- users
![users](https://user-images.githubusercontent.com/32899655/87233739-cf3d8a80-c3e7-11ea-8a9d-2151e3c60e49.png)
- posts
![posts](https://user-images.githubusercontent.com/32899655/87233737-cb116d00-c3e7-11ea-99ef-5cc6e7761dd0.png)
- comments
![comments](https://user-images.githubusercontent.com/32899655/87233735-c6e54f80-c3e7-11ea-8090-796f58d8c27b.png)
- views
![views](https://user-images.githubusercontent.com/32899655/87233740-d06eb780-c3e7-11ea-86fd-d41d2b4b41cd.png)


- Run the webiste using the following link in browser :
  - localhost/forum12/




## Running

- snapshots of the working project

- Home 
![main screen](https://user-images.githubusercontent.com/32899655/87233438-20984a80-c3e5-11ea-9dc8-cdfb03ebbeb2.png)

- Register
![signup (2)](https://user-images.githubusercontent.com/32899655/87233449-2db53980-c3e5-11ea-9b14-38f825e59ee9.png)

- Login
![login](https://user-images.githubusercontent.com/32899655/87233450-2ee66680-c3e5-11ea-804a-fcc15a87afd5.png)

- Ask Question
![create post](https://user-images.githubusercontent.com/32899655/87233463-360d7480-c3e5-11ea-8f7a-7977268c0b2a.png)

- View Topic
![view question (2)](https://user-images.githubusercontent.com/32899655/87233466-373ea180-c3e5-11ea-9b88-9908e24abd0b.png)

- Answer Topic
![answer_ques](https://user-images.githubusercontent.com/32899655/87233496-9dc3bf80-c3e5-11ea-876f-189501a92144.png)

- User Details
![userdetails](https://user-images.githubusercontent.com/32899655/87233462-34dc4780-c3e5-11ea-8391-c1db53a1483c.png)

- User Activity
![user activity](https://user-images.githubusercontent.com/32899655/87233460-3443b100-c3e5-11ea-8e8c-141d93f1ed11.png)

- Admin Panel
![Admin Panel](https://user-images.githubusercontent.com/32899655/87233453-30179380-c3e5-11ea-90e1-1be745341db8.png)

- Manage Posts - Admin Panel
![manage users](https://user-images.githubusercontent.com/32899655/87233455-3148c080-c3e5-11ea-8bd0-ca81a9ac45a6.png)

- Manage Users - Admin Panel
![manage posts](https://user-images.githubusercontent.com/32899655/87233456-3279ed80-c3e5-11ea-9786-7be2987543ec.png)
