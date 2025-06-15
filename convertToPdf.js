import fs from 'fs';
import { promisify } from 'util';
import libre from 'libreoffice-convert';
import path from 'path';
import { fileURLToPath } from 'url';

// Convert the libre.convert function to a Promise
const convertAsync = promisify(libre.convert);

// Function to convert DOCX to PDF
async function convertDocxToPdf(inputPath, outputPath) {
    try {
        // Read the DOCX file
        const docxBuf = await fs.promises.readFile(inputPath);

        // Convert it to PDF
        const pdfBuf = await convertAsync(docxBuf, '.pdf', undefined);

        // Create output directory if it doesn't exist
        const outputDir = path.dirname(outputPath);
        if (!fs.existsSync(outputDir)) {
            await fs.promises.mkdir(outputDir, { recursive: true });
        }

        // Write the PDF file
        await fs.promises.writeFile(outputPath, pdfBuf);

        console.log('Conversion completed successfully!');
        console.log('Output file:', outputPath);
    } catch (error) {
        console.error('Error converting file:', error);
        process.exit(1);
    }
}

// CLI support
if (process.argv[1] === fileURLToPath(import.meta.url)) {
    const [,, inputPath, outputPath] = process.argv;
    if (!inputPath || !outputPath) {
        console.error('Usage: node convertToPdf.js <input.docx> <output.pdf>');
        process.exit(1);
    }
    convertDocxToPdf(inputPath, outputPath)
        .then(() => process.exit(0));
}
