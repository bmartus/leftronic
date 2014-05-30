Leftronic API Documentation
===========================

What is Leftronic?
------------------

[Leftronic](https://beta.leftronic.com) makes powerful dashboards for business intelligence.

* Colorful and interactive data visualizations
* Templates to get you started right away
* Drag-and-drop editor makes it easy for anyone to create a powerful dashboard, customized to their needs
* Integration with Google Analytics, Twitter, Chartbeat, Zendesk, Basecamp, Pivotal Tracker, Facebook, and more to come!
* Dashboards can be protected or shared with a shortened URL
* Powerful API's for PHP, Python, Ruby, and Java
* Python Package and Ruby Gem

Technical Notes
---------------

We also suggest checking out our [API](https://www.leftronic.com/api) page. It has JSON and CURL examples in addition to a test form to send data to your custom widgets.

All API requests are made by sending a POST request to https://www.leftronic.com/customSend with a properly formatted JSON packet. We do not support XML.

Getting Started
---------------

If you haven't already, create an account at https://www.leftronic.com/accounts/login.

PHP
---

Start by downloading the most recent version of our PHP API at NEEDS LINK

### Dependencies

This API library uses "json_encode()" which requires [PHP](http://php.net/downloads.php) 5.2.0 or greater.

Create a class instance with your API key. Feel free to name it whatever you'd like.

```php
$update = new Leftronic("YOUR_ACCESS_KEY");
```

Here are some example functions to push to your dashboard. Be sure you have configured the correct widgets to accept custom data points. Also, be sure that you have entered your API access key correctly.

Let's start with pushing a number to a widget.

```php
$update->pushNumber("yourNumberStream", 14600);
```

Now we'll push some geographic coordinates to a map widget. You can use either the U.S. or world map widgets. The first coordinate (37.8) is the latitude and the second coordinate (-122.6) is the longitude. If your request is successful, you should see a data point appear on San Francisco, California. Optionally, if you'd like to set the color of your map point simply specify that in your function call. *Note*: only red, blue, green, purple, and yellow colors are supported at this time. Incorrect or missing color will default to red.

```php
$update->pushGeo("yourGeoStream", 37.8, -122.6);
```

```php
$update->pushGeo("yourGeoStream", 37.8, -122.6, "blue");
```

Here's how you push a title and message to a text feed widget.

```php
$update->pushText("yourTextStream", "This is my title.", "Hello World!");
```

Let's push an array of names and values to a leaderboard widget. Be sure to create the array first (you may call it whatever you'd like). Be careful to use the proper syntax. Next, push the array to your widget.

```php
$leaderArray = array(array("name" => "Johnny", "value" => 84), array("name" => "Jamie", "value" => 75), array("name" => "Lance", "value" => 62));

$update->pushLeaderboard("yourBoardStream", $leaderArray);
```

Similar to the last example, let's push a list of items to a list widget. Same rules as last time.

```php
$listArray = array(array("listItem" => "Elizabeth"), array("listItem" => "Marshall"), array("listItem" => "Claire"), array("listItem" => "Nolan"));

$update->pushList("yourListStream", $listArray);
```

Python
------

**_Note_**: We also have a Leftronic Python Package that offers the same functionality. You can download it on [Github](NEEDS LINK) or on the [Python Package Index](http://pypi.python.org/pypi/leftronic).

Start by downloading the most recent version of our Python API at NEEDS LINK.

### Dependencies

[urllib2](http://docs.python.org/library/urllib2.html) and [JSON](http://docs.python.org/library/json.html).

```python
import urllib2
import json
```

Import the file. Your location may vary.

```python
from leftronic import Leftronic
```

Create a class instance with your API key. Feel free to name it whatever you'd like.

```python
update = Leftronic("YOUR_ACCESS_KEY")
```

Here are some example functions to push to your dashboard. Be sure you have configured the correct widgets to accept custom data points. Also, be sure that you have entered your API access key correctly.

Let's start with pushing a number to a widget.

```python
update.pushNumber("yourNumberStream", 14600)
```

Now we'll push some geographic coordinates to a map widget. You can use either the U.S. or world map widgets. The first coordinate (37.8) is the latitude and the second coordinate (-122.6) is the longitude. If your request is successful, you should see a data point appear on San Francisco, California. Optionally, if you'd like to set the color of your map point simply specify that in your function call. *Note*: only red, blue, green, purple, and yellow colors are supported at this time. Incorrect or missing color will default to red.

```python
update.pushGeo("yourGeoStream", 37.8, -122.6)
```

```python
update.pushGeo("yourGeoStream", 37.8, -122.6, "blue")
```

Here's how you push a title and message to a text feed widget.

```python
update.pushText("yourTextStream", "This is my title.", "Hello World!")
```

Let's push an array of names and values to a leaderboard widget. Be sure to create the array first (you may call it whatever you'd like). Be careful to use the proper syntax. Next, push the array to your widget.

```python
leaderArray = [{"name": "Johnny", "value": 84}, {"name": "Jamie", "value": 75}, {"name": "Lance", "value": 62}]

update.pushLeaderboard("yourBoardStream", leaderArray)
```

Similar to the last example, let's push a list of items to a list widget. Same rules as last time.

```python
listArray = [{"listItem": "Elizabeth"}, {"listItem": "Marshall"}, {"listItem": "Claire"}, {"listItem": "Nolan"}]

update.pushList("yourListStream", listArray)
```

Ruby
----

**_Note_**: We also have a Leftronic Ruby Gem that offers the same functionality. You can download it on [Github](https://github.com/leftronic/leftronic/) or on [RubyGems](https://rubygems.org/gems/leftronicapi).

Start by downloading the most recent version of our Ruby API at https://github.com/leftronic/leftronic.

### Dependencies

[RubyGems](http://rubygems.org/pages/download), [Curb](http://rubygems.org/gems/curb), and [JSON](http://rubygems.org/gems/json). We recommend installing them with the [RubyGems](http://rubygems.org/pages/download) installer.

```ruby
require 'rubygems'
require 'curb'
require 'json'
```

Import the file. Your location may vary.

```ruby
require 'leftronic'
```

Create a class instance with your API key. Feel free to name it whatever you'd like.

```ruby
update = Leftronic.new("YOUR_ACCESS_KEY")
```

Here are some example functions to push to your dashboard. Be sure you have configured the correct widgets to accept custom data points. Also, be sure that you have entered your API access key correctly.

Let's start with pushing a number to a widget.

```ruby
update = Leftronic.pushNumber("yourNumberStream", 14600)
```

Now we'll push some geographic coordinates to a map widget. You can use either the U.S. or world map widgets. The first coordinate (37.8) is the latitude and the second coordinate (-122.6) is the longitude. If your request is successful, you should see a data point appear on San Francisco, California. Optionally, if you'd like to set the color of your map point simply specify that in your function call. *Note*: only red, blue, green, purple, and yellow colors are supported at this time. Incorrect or missing color will default to red.

```ruby
update = Leftronic.pushGeo("yourGeoStream", 37.8, -122.6)
```

```ruby
update = Leftronic.pushGeo("yourGeoStream", 37.8, -122.6, "blue")
```


Here's how you push a title and message to a text feed widget.

```ruby
update = Leftronic.pushText("yourTextStream", "This is my title.", "Hello World!")
```

Let's push an array of names and values to a leaderboard widget. Be sure to create the array first (you may call it whatever you'd like). Be careful to use the proper syntax. Next, push the array to your widget.

```ruby
leaderArray = Array[{"name" => "Johnny", "value" => 84}, {"name" => "Jamie", "value" => 75}, {"name" => "Lance", "value" => 62}]

update = Leftronic.pushLeaderboard("yourBoardStream", leaderArray)
```

Similar to the last example, let's push a list of items to a list widget. Same rules as last time.

```ruby
listArray = Array[{"listItem" => "Elizabeth"}, {"listItem" => "Marshall"}, {"listItem" => "Claire"}, {"listItem" => "Nolan"}]

update = Leftronic.pushList("yourListStream", listArray)
```

Java
----

Our Java API was created by Webmetrics and is available at https://github.com/webmetrics/leftronic-java.

At this time we do not offer support for our Java API but we have tested it, and it works.

Feedback and Issues
-------------------

If you notice any bugs or other issues, submit a patch or send us a pull request. You can also send us an email at <support@leftronic.com>.