# ESelector
Reduces annoying need to check if model attributes and relations are empty/null/undefined.

##Examples

```php
echo $model->selector('title', 'NO TITLE'); 
```
The above is equivalent to:
```
if( empty($model->title) ) {
	echo 'NO TITLE';
} else {
	echo $model->title;
}
```

###ESelector also works with relationships
```php
echo $model->selector('contact.fullname', 'No Name');
echo $model->selector('contact.address.city', 'No City');
```

The above is equivalent to:
```
if( !is_null($model->contact) && !empty($model->contact->fullname) ) {
	echo $model->contact->fullname)
} else {
	echo 'No Name';
}
if( !is_null($model->contact) && !is_null($model->contact->address) && !empty($model->contact->address->city) ) {
	echo $model->contact->address->city;
} else {
	echo 'No City';
}
```

##Wow ESelector is so much easier!