* array_map now supporters any Traversable
* array_key_exists now supports any ArrayAccess
  BC: array_key_exists checks properties, so it's possible this change would make a class with a property called 'path' that implements ArrayAccess and offsetExists('path') returns false
