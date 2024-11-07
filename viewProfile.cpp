#include <string>
#include <fstream>
#include <iostream>
#include <sstream>
#include <vector>
#include <map>

struct User{
	std::string username;
	std::string password;
	std::string age;
	std::string gender;
	std::string voted;
	std::string voteChoice;
};

std::vector<User> loadUsers(const std::string& filename){
	std::vector<User> users;
	std::ifstream file(filename);
	std::string line;

	while(std::getline(file, line)){
		std::istringstream iss(line);
		User usr;

		std::getline(iss, usr.username, ' ');
		std::getline(iss, usr.password, ' ');
		std::getline(iss, usr.age, ' ');
		std::getline(iss, usr.gender, ' ');
		std::getline(iss, usr.voted, ' ');
		std::getline(iss, usr.voteChoice);

		users.push_back(usr);
	}
	return users;
}

int main(int argc, char* argv[]){
	//Getting users username
	std::string username = argv[1];

	//Load users in from text file (USERS.txt)
	auto users = loadUsers("USERS.txt");

	//Check that their are users present
	if(users.empty()){
		std::cout << "No users present..." << std::endl;
		return 1;
	}

	for(const User& usr : users){
		if(usr.username == username){
			std::cout << usr.username << " " << usr.password << " " << usr.age << " " << usr.gender << " " << usr.voted << " " << usr.voteChoice;
			return 0;
		}
	}

	// No user found
    std::cerr << "User not found: " << username << std::endl;
    return 1;
}