# stream-sampler
Stream sampler that picks a random sample of size k from a stream of values with unknown and possibly very large length base on Reservoir sampling algorithm

## Using
install dependencies
```
composer install
```
### parameters
| name | description
| --- | --- |
| -k  | sample length ( default 5) |
| --random, -r | generate random stream within the application |
| --length, -l | the length of the random string to be generated (default 1000) |

### examples
picks a sample with the default options value
```
$ bin/sampler -r 
```

picks a sample of length = 10 from an auto generated random stream of 10000 character

```
$ bin/sampler -r -k 10 -l 10000
```

picks a sample from piped process with the defualt options value (k = 5)
```
$ dd if=/dev/urandom count=100 bs=1MB | base64 | bin/sampler
```
