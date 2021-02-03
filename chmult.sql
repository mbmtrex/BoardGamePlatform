CREATE TABLE users(
	UserId int(11) NOT NULL auto_increment,
	GameOpponent varchar(50) NOT NULL,
	GameId int(11) NOT NULL,
	GameColor varchar(11) NOT NULL,
	UserName varchar(50) NOT NULL,
	UserPassword varchar(50) NOT NULL ,
	MoveString varchar(100) NOT NULL,
	latestMove varchar(100) NOT NULL,
	PRIMARY KEY (UserId)
);
	

	
	

