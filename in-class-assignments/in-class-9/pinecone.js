// checks if string contains "pinecone"
function pineconeCheck(str) {
    return str.includes("pinecone");
} 

// array of sentences
const sentences = ["My name is Jozef", "My name is pinecone", "I am programming", "Hello pinecone, how are you?"]; 

// filtering for pinecone 
const filteredSentences = sentences.filter(pineconeCheck); 

// output
console.log(filteredSentences);