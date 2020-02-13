<?php

return [
    'alipay' => [
        'app_id'         => '2016101700711230',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAoqnjl70rw51CiiMwA4NZlLbuS5VMdPkeUzJ0OXgRYPJxHTe39rS1acByQ2VVJIzGlsZcFpqc3qJGORmoejlXYp+XlRh0L6LQhlMarajQgqNpaovfTdPxhb3xtjyJeyzA6PU5gvkMwrtzGuncs+pnSjV85msJ4nlntX9ODTBE1l2qdKfyT3VQm/Qgt0W6yzBpq945t+cLaIYxg93lo07wfWKSJffwiJ1SF/LRJYLgVPbCghlSxQrLtP6OAGfJi2b9QbaAS0EqCJqNt4ivxXZengjCtoGw+RszBkjXlOBgiZYAe6y+m+qYqM4ZM3++OBs2I7DnNO1Yo/3gHnQbvKsxwwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA6UUu6ZvC0k4aWNY5O7NqL61cOkkUJNHNpXWOm6LFJol/ss5/aqbtEtx43F+5nNj3RSn3GmZ8Qcg5SO9o1UuEkn6yn2G4c4sUBcIB9cOD0B+Z5D3wb4xm8ECve1t8jpDu7rGOSGuWCqTAlwCMUfkdHJw8AHR0Q10XfWZscQmoOnMbqOs5JivjxhDITzoKIG89BFAZhXRXRGvzxy7Sun37SGhuET6kvP7HR4N2Ms+P8ZiCUSXxIdaeAajimMjEbBNld3zKjh0HpGWdKHH8Z8pbb5Np2nHeja1F+iDqC+BfMYQ2y3UYoq2vCjRbnVq7Zf1MqUUEE1xj6TMMbxW6K7ZJCwIDAQABAoIBAQDAVJV4cT+xjEn24zIvQh+UDdjUCbr9HKr0+DdLpWnt+0J5l/7AXb9sZLGV6astYkqGETK25rceucpZk2OZMXmuG56FANpHEe3BTZO2Ia0FpXiKEnOyVU3uWzcUe3r4RRFrZqQMnAAK6IoONpp7X+0b0Mk8CshtXkzmzNMuZCr7fKelaz3mGa/s9UKpw+PqRDN7aovWf4ddjGXxV2YhTaA3nZKqnKWR3Fm9snxHOBlHanRcCFRrzVgiim4Uib4aJ7UV39/d6gUG2mGu902VFO6+0ROWaQSH4RMdIeq+zPwmh4oiaGm/6oSpJqJL4lqGf/kXcz2elv5fl9wp0rhyc5FRAoGBAPzgI/COIRW3Aug9u6Bz5tF3WVtZyRWaeTFQ9oScyt3MtM0PE2D0+n0Bch5DvSl5qulsys+vRwMgGqERonaPvKz4dRIPhDA7HdzvrBlwUyfjMXjfWN7b/ffM6JiKUCCQpTvDN9tqDnCsUZZNdJYFeAUEBQmqCFlAt9o2p2tesf85AoGBAOwnB7qE4CRfEV0uPBAwJ3+AtkuNSqpgH0472HIUwZAGU69fSVMNm9hoh0rqiUB4TIWyiT63WSosJcrJsOgI0SBxUwNRSo5023H30Jr3anLIglrEFybBtGhq6Ld1FfEhw/o7VReygIgD8JQ1XDiUWmV7OacuTHsBJBEcQHSSz0ZjAoGAG9vFmdbOpknHNDa42PBr2V/ApGO713lxKJG21t0/LDhFIuIqTGAwyFzEabkkudEBlz25CjBRLnL2/A+pSk6DhrrIivjSo02f+Jse5p6NSrOo25wfek3aKNaWOVfjg/LrgS38lVuVw6v4QQq/cVeg5UyQEYR97vdGSfADebyw92ECgYBoebP/nr2TGcQS11uXRdaToBwGPNIlojT3ZZ6SigBAeawYUC2eYszp5wTD7hMexJoGJEB30KHP+IwXtTdg0FXE5p31P8eeUrCrMRnHFWKwuWiCQ3KCoPvxniqqz1APyAJt+EXjIAOhKS0MRLcyCOAdOXD+N4t6d7y/HSKe8DxnRQKBgCXoXANGT22aB8aLMX1uaUp9DFSrz+p6FVK2YGlNP1WDuca0FzPCJXzaPpijyceLSFS4iSa3jxn4ETr7VnG92HoJp24XTc7RCMJu74apaxdrABsy6dzr3puJOCsXy4JmFX+wKv8As0qftL4nlEHkNn0LiKgZfNomjOND0Quxr8Hw',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
