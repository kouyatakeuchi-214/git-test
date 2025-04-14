SELECT first_name, last_name FROM users;

SELECT tweets.*FROM users JOIN tweets ON users.id = tweets.user_id WHERE users.first_name = 'John' AND users.last_name = 'Doe';

