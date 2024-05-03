def calculatePi():
  try:
    result = 0
    inputvalue = int(input("enter a value"))
    if inputvalue < 0:
      return("Error\nPlease ensure you entered a positive value")
    for n in range (inputvalue):
      value= ((-1)**n)/(2*n+1)
      result = result+value
      n=n+1
    result=result*4
    return result
  except:
    return("Error\nPlease ensure your input is a whole number")
print("welcome to Pi calculator")
result= calculatePi()
print(result)

