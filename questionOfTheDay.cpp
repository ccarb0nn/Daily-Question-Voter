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

// Save questions to file 
void saveQuestions(const std::string& filename, const std::vector<Question>& questions){
	std::ofstream file(filename);
	for(const auto& q : questions){
		file << q.question << "," << q.optionA << "," << q.optionB << "," << q.votesA << "," << q.votesB << std::endl;
	}
}


int main() {

	//get a random number in range from the number of questions available and replace that with the value 0
	//This way it chooses a different number each day. After this adjust it so the users voting status resets each day.
	
	//load questions in from text file
	auto questions = loadQuestions("questions.txt");

	//Check that there is a question present
	if(questions.empty()){
		std::cout << "No Question..." << std::endl;
		return 1;
	}

	std::cout << questions[0].question << "," << questions[0].optionA << "," << questions[0].optionB;

	return 0;
}