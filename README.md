# home-mngmt-studio
Application for managing home duties and other stuff

<h2>Basic info</h2>
<h4>What is it?</h4>
<p>
  This is a simple crud application for management daily tasks with other (ex. wife, girlfriend, family or roommates).
  <ul>
    <li>Announcements - sometimes we don't see each other for many hours and we want to save some information, for example we are going to cinema in the next week. OF course we can send SMS, but we can also write an announcement, so others can remember this   </li>
    <li>Tasks - this is for create task for others. Ex. wash the carpet. Others can see who created it, when it was created, when is deadline for it. They can also assign the task for themselves.</li>
    <li>Gifts - this is great. Sometimes we want to buy something for us or for someone. And we want to make a surprise. But what about situation, when someone has already ordered a thing and we don't know about it, so we also order the same thing for him. With this we can just inform others what we want, when we ordered it and when we received it. </li>
  </ul>
</p>
<p>
  This application was first written by me in Java with Spring Boot in MVC pattern. I've decided to rewrite it in vanilla PHP as RESTful API. After that some Front-end will be added. I've chosen PHP because it's easier to find cheap hosting for it.
</p>
<h4>Technology used in project</h4>
<h6>back-end</h6>
<ul>
  <li>php 7.4</li>
  <li>mysql 8.0</li>
</ul>
<h6>other</h6>
<ul>
  <li>Docker</li>
  <li>Postman</li>
  <li>MySql WOrkbench</li>
</ul>
<h2>Setting up environment</h2>
<p> Use Dockerfile and docker-compose.yaml to set up environment (change values if needed):
  <br /><code>
    $ docker-compose up --build
  </code>
</p>
