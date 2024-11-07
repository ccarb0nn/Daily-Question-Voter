#include <string>
#include <fstream>
#include <iostream>
#include <sstream>
#include <vector>
#include <map>

struct Question{
	std::string question;
	std::string optionA;
	std::string optionB;
	int votesA;
	int votesB;
};

//Loading questions from file
std::vector<Question> loadQuestions(const std::string& filename){
	std::vector<Question> questions;
	std::ifstream file(filename);
	std::string line;

	while(std::getline(file, line)){
		std::istringstream iss(line);
		Question q;
		std::string votesA, votesB;

		std::getline(iss, q.question, ',');
		std::getline(iss, q.optionA, ',');
		std::getline(iss, q.optionB, ',');

		std::string strVotesA, strVotesB;
		std::getline(iss, strVotesA, ',');
		std::getline(iss, strVotesB);

		q.votesA = std::stoi(strVotesA);
		q.votesB = std::stoi(strVotesB);

		questions.push_back(q);
	}
	return questions;
}

struct User{
	std::string username;
	std::string password;
	std::string age;
	std::string gender;
	std::string voted;
};

void saveUserVotingStatus(const std::string& filename, const std::string& currentUser, const std::string& voted){
	std::ifstream file(filename);
	std::vector<User> users;
	User userInfo;

	// Load existing users
    while (file >> userInfo.username >> userInfo.password >> userInfo.age >> userInfo.gender >> userInfo.voted) {
        users.push_back(userInfo);
    }

    for (auto& user : users) {
        if (user.username == currentUser) {
            user.voted = voted; // Update the voting status
        }
    }

	std::ofstream outFile(filename);
	for(const auto& user : users){
		outFile << user.username << " " << user.password << " " << user.age << " " << user.gender << " " << user.voted << std::endl;
	}

}

// Save questions to file 
void saveQuestions(const std::string& filename, const std::vector<Question>& questions){
	std::ofstream file(filename);
	for(const auto& q : questions){
		file << q.question << "," << q.optionA << "," << q.optionB << "," << q.votesA << "," << q.votesB << std::endl;
	}
}

int main(int argc, char* argv[]) {
	if (argc != 4){
		std::cout << "Usage: " << argv[0] << "<filename> <vote> <username>" << std::endl;
		return 1;
	}

	std::string filename = argv[1]; // questions.txt
	std::string vote = argv[2];
	std::string username = argv[3];


	//load questions in from text file
	auto questions = loadQuestions(filename);

	//Check that there is a question present
	if(questions.empty()){
		std::cout << "No Question..." << std::endl;
		return 1;
	}

	//Checking for vote
	if(vote == "A"){
		questions[0].votesA++;
	}
	else if(vote == "B"){
		questions[0].votesB++;
	}
	
	//Save the vote/question to the file (questions.txt)
	saveQuestions(filename, questions);

	//Save users voting status
	saveUserVotingStatus("USERS.txt", username, "true");
	
	std::cout << "Vote updated successfully!" << std::endl;

	return 0;
}