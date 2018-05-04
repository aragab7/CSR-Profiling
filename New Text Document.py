from random import randint

def random_verb():
    # your code here
    if randint(0,2) == 0:
        return "run"
    elif randint(0,2) == 1:
        return "kayak"
    else:
        return "print"
print (random_verb())
