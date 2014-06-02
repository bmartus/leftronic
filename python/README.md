### Python Leftronic API Package documentation

Start by downloading the most recent version of our Python API at https://github.com/leftronic/leftronic/tree/master/python. You can also download a package on the [Python Package Index](https://pypi.python.org/pypi/leftronic) or [Github](https://github.com/leftronic/leftronic/tree/master/python/dist). You may also use pip to install the Leftronic package with `pip install leftronic`.

Import the file:

```python
from leftronic import Leftronic
```

Create a class instance with your access key:

```python
update = Leftronic('YOUR_ACCESS_KEY')
```

Then use the various push... functions as follows:

```python
update.pushNumber('yourNumberStream', 14600)
```

See https://www.leftronic.com/api/#python for full documentation.
