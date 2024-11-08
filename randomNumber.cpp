#include <string>
#include <fstream>
#include <iostream>
#include <sstream>
#include <vector>
#include <map>
#include <ctime>

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

int main() {
	std::srand(std::time(0));
	
	//load questions in from text file
	auto questions = loadQuestions("questions.txt");

	//Check that there is a question present
	if(questions.empty()){
		std::cout << "No Question..." << std::endl;
		return 1;
	}
	//access the random number txt file to get the random question of the day value 

	//If its a new day get a new random question
	int randomNumber = 0;
	//Get a random number in range from 0 to the size of the questions.txt file
	randomNumber = rand() % questions.size(); 
	std::string num = std::to_string(randomNumber);

	std::cout << num;

	return 0;
}