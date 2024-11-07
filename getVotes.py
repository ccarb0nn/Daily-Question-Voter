import sys
import subprocess 


#Compile the C++ code
compile_process = subprocess.run(["g++", "getVotes.cpp", "-o", "getVotes"], capture_output = True, text = True)
	
if compile_process.returncode != 0:
	print("Compiling Error: ", compile_process.stderr)
else:
	#Run the compiled C++ program (getVotes)
	run_process = subprocess.run(["./getVotes"], capture_output = True, text = True)
	print(run_process.stdout)