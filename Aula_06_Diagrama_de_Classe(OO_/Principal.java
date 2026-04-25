import javax.swing.JOptionPane;

public class Principal 
{

	public static void main(String[] args) 
	{
		//Instanciando a classe Caixa
		Caixa cx = new Caixa();
				
		//Recebendo valor
		double valorS = Double.parseDouble(
						JOptionPane
				     .showInputDialog(
					 "Digite o valor do saque:"));
		
		double saldinho = cx.Saque(valorS);
		
		//Mostrando o retorno
		JOptionPane.showMessageDialog(null, 
				"Valor atual:" + saldinho);
	}

}
