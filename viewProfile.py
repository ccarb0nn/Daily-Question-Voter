import sys
import subprocess 

username = sys.argv[1]

#Compile the C++ code
compile_process = subprocess.run(["g++", "viewProfile.cpp", "-o", "viewProfile"], capture_output = True, text = True)
	
if compile_process.returncode != 0:
	print("Compiling Error: ", compile_process.stderr)
else:
	#Run the compiled C++ program (viewProfile)
	run_process = subprocess.run(["./viewProfile", username], capture_output = True, text = True)
	print(run_process.stdout)