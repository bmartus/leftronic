### Ruby Leftronic API Package documentation

Start by downloading the most recent version of our Ruby API at https://github.com/leftronic/leftronic/tree/master/ruby/lib. You can also download a Gem file on the [RubyGems](https://rubygems.org/gems/leftronicapi) or [Github](https://github.com/leftronic/leftronic/tree/master/ruby). You may also use gem to install the Leftronic package with `gem install leftronicapi`.

Create a class instance with your access key:

```ruby
require 'leftronic'
update = Leftronic.new "YOUR_ACCESS_KEY"
```

Then use the various push... functions as follows:

```ruby
update.push_number "yourNumberStream", 14600
```

See https://www.leftronic.com/api/#ruby for full documentation.
