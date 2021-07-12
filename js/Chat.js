function talk() {
    var know = {
        "How Are You?": "Great !",
        "Bye": "Have A Nice Day !",
        "Hello": "Hi , Whats Up",
        "Help me": "Sure, Press 1 If you are a potential Donor Press 2 If you are a Potential Receiver",
        "1": "Please Register Yourself as a Donor to get all details about potential regions to to donate for a good cause",
        "2": "Please Register Yourself as a reciver to place your advertisement as to recive funding for your next project/Business",
        "How can I Donate?": "Easy! Register yourself as a donor, Once done you will be taken to the dashboard where you can review the regions that can be your potential funding area! And simply donate the amount. You can also contact the reciever with their contact Number mentioned in the description Box.",
        "How can I apply for raising Funds?": "Easy! Register yourself as a reciver. Advertise about your product you Business, Mention all the required details and that's how you begin raising funds for you Business/Project!",
        "Tell me something about Mansi": "She is the best!"
    };
    var user = document.getElementById('userBox').value;
    document.getElementById('chatLog').innerHTML = user + "<br>";
    if (user in know) {
        document.getElementById('chatLog').innerHTML = know[user] + "<br>";
    } else {
        document.getElementById('chatLog').innerHTML = "I do not understand .";
    }
}