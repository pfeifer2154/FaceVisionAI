async function calcular() {
    
    const net = new brain.NeuralNetwork({ hiddenLayers: [3] });
   
    const training = [
      { input: [1, 2], output: [1] },
      { input: [2, 1], output: [1] },
      { input: [2, 2], output: [0] },
      { input: [1, 1], output: [0] },
    ];
   
    net.train(training);

    const input1 = parseFloat(document.getElementById('input1').value);
    const input2 = parseFloat(document.getElementById('input2').value);

    const output1 = net.run([input1, input2]);
    const output2 = net.run([input2, input1]);

    const resultado = document.getElementById('resultado');

    if (output1 > output2) {
      resultado.innerHTML = `A expressão Sorriso é mais provável com resultado: ${output1}`;
    } else {
      resultado.innerHTML = `A expressão analise é mais provável com resultado: ${output2}`;
    }
  }